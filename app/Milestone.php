<?php
/**
 * Class Milestone
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
use Storage;
use DB;
use Auth;
use App\Job;
use App\EmailTemplate;
use App\Mail\FreelancerEmailMailable;
use App\User;
use App\Proposal;

/**
 * Class Proposal
 *
 */
class Milestone extends Model
{

    /**
     * Get the job that owns the proposal.
     *
     * @return relation
     */
    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    /**
     * Get all of the proposal's report.
     *
     * @return relation
     */
    public function reports()
    {
        return $this->morphOne('App\Report', 'reportable');
    }

    /**
     * Get the freelancer that owns the proposal.
     *
     * @return relation
     */
    public function freelancer()
    {
        return $this->belongsTo('App\User');
    }
    
    /**
     * Get the employer that owns the job.
     *
     * @return relation
     */
    public function proposal()
    {
        return $this->belongsTo('App\Proposal', 'proposal_id');
    }

    /**
     * Store Milestones.
     *
     * @param string $request req->attributes
     * @param string $id      ID
     *
     * @return milestone
     */
    public static function storeProposalMilestone($id, $request)
    {
        $i = 0;
        if(!empty($request->desc) && count($request->desc) > 1){
            for($i = 0; $i < count($request->desc); $i++){
                $ms = new Milestone();
                $ms->proposal_id = $id;
                $ms->description = $request->desc[$i];
                $ms->amount = $request->ms_amount[$i];
                $ms->hired = 0;
                $ms->status = 'Suggested';
                $ms->save();
            }
        } else {
            $ms = new Milestone();
            $ms->proposal_id = $id;
            $ms->description = 'Project Milestone';
            $ms->amount = intval($request['amount']);
            $ms->hired = 0;
            $ms->status = 'Suggested';
            $ms->save();
        }
        return true;
    }
    
    /**
     * Update Milestones.
     *
     * @param string $request req->attributes
     * @param string $id      ID
     *
     * @return milestone
     */
    public static function updateProposalMilestone($id, $descriptions = array(), $amounts = array())
    {
        $before_ms = self::where('proposal_id', $id);
        $i = 0;
        if(!empty($before_ms)){
            $before_ms->delete();
            for($i = 0; $i < count($amounts); $i++){
                $before_ms = new Milestone();
                $before_ms->proposal_id = $id;
                $before_ms->description = $descriptions[$i];
                $before_ms->amount = intval($amounts[$i]);
                $before_ms->hired = 0;
                $before_ms->status = 'Suggested';
                $before_ms->save();
            }
        } else {
            for($i = 0; $i < count($amounts); $i++){
                $ms = new Milestone();
                $ms->proposal_id = $id;
                $ms->description = $descriptions[$i];
                $ms->amount = $amounts[$i];
                $ms->hired = 0;
                $ms->status = 'Suggested';
                $ms->save();
            }
        }
        return true;
    }
    
    /**
     * Update Milestone by milestone id.
     *
     * @param string $request req->attributes
     * @param string $id      ID
     *
     * @return milestone
     */
    public static function updateMilestone($milestone_id)
    {
        $milestone = self::find($milestone_id);
        $milestone->hired = 1;
        $milestone->status = 'In Progress';
        $milestone->save();
        return true;
    }

    /**
     * AssignJob.
     *
     * @param string $id ID
     *
     * @return milestone
     */
    public function assignJob($id)
    {
        $proposal = $this::find($id);
        $proposal->hired = 1;
        $proposal->status = 'hired';
        $proposal->save();
        $job = Job::find($proposal->job->id);
        $job->status = 'hired';

        return $job->save();
    }

    /**
     * Send Message.
     *
     * @param mixed $request request->attr
     * @param int   $user_id
     *
     * @return response
     */
    public static function sendMessage($request, $user_id)
    {
        if (!empty($request['recipent_id'])) {
            $message_attachments = array();
            if (!empty($request['attachments'])) {
                $old_path = 'uploads\proposals\temp';
                $attachments = $request['attachments'];
                foreach ($attachments as $key => $attachment) {
                    if (Storage::disk('local')->exists($old_path . '/' . $attachment)) {
                        $new_path = 'uploads/proposals/' . $user_id;
                        if (!file_exists($new_path)) {
                            File::makeDirectory($new_path, 0755, true, true);
                        }
                        $filename = time() . '-' . $attachment;
                        Storage::move($old_path . '/' . $attachment, $new_path . '/' . $filename);
                        $message_attachments[] = $filename;
                    }
                }
            }
            $msg_attachments = !empty($message_attachments) ? serialize($message_attachments) : null;
            DB::table('private_messages')->insert(
                [
                    'author_id' => $user_id, 'proposal_id' => $request['proposal_id'], 'content' => $request['description'],
                    'attachments' => $msg_attachments,
                    'notify' => 0, "created_at" => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]
            );

            $lastInsertedID = DB::getPdo()->lastInsertId();
            DB::table('private_messages_to')->insert(
                [
                    'private_message_id' => $lastInsertedID, 'recipent_id' => $request['recipent_id'],
                    'message_read' => 0, 'read_date' => null, "created_at" => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]
            );
            $json['type'] = 'success';
            return $json;
        }
    }

    /**
     * Get message
     *
     * @param mixed $user_id       User ID
     * @param int   $freelancer_id Freelancer ID
     * @param int   $proposal_id   Proposal
     *
     * @return response
     */
    public static function getMessages($user_id, $freelancer_id, $proposal_id, $project_type)
    {
        return DB::table('private_messages')
            ->join('private_messages_to', 'private_messages.id', '=', 'private_messages_to.private_message_id')
            ->join('profiles', 'profiles.user_id', '=', 'private_messages.author_id')
            ->select('private_messages.id', 'private_messages.*', 'profiles.avater')
            ->where('private_messages.proposal_id', $proposal_id)
            ->where('private_messages.project_type', $project_type)
            ->orWhere(function ($query) use ($user_id, $freelancer_id) {
                $query
                    ->where('private_messages_to.recipent_id', '=', $user_id)
                    ->Where('private_messages.author_id', '=', $freelancer_id);
            })
            ->orWhere(function ($query) use ($user_id, $freelancer_id) {
                $query->where('private_messages_to.recipent_id', '=', $freelancer_id)
                    ->Where('private_messages.author_id', '=', $user_id);
            })
            ->orderBy('private_messages.created_at')->get()->toArray();
    }

    /**
     * Get message
     *
     * @param mixed $user_id       User ID
     * @param int   $freelancer_id Freelancer ID
     * @param int   $proposal_id   Proposal
     *
     * @return response
     */
    public static function getProjectHistory($user_id, $freelancer_id, $proposal_id, $project_type)
    {   
        return DB::table('private_messages')
            ->join('private_messages_to', 'private_messages.id', '=', 'private_messages_to.private_message_id')
            ->join('profiles', 'profiles.user_id', '=', 'private_messages.author_id')
            ->select('private_messages.id', 'private_messages.*', 'profiles.avater')
            ->where('private_messages.proposal_id', $proposal_id)
            ->where('private_messages.project_type', $project_type)
            ->orderBy('private_messages.created_at')->get()->toArray();
    }
    

    /**
     * Get milestones by status.
     *
     * @param mixed $user_id User ID
     * @param int   $status  Status
     * @param int   $limit   limit
     *
     * @return \Illuminate\Http\Response
     */
    public static function getProposalsByStatus($user_id, $status, $limit = 3)
    {
        return Proposal::select('id', 'amount', 'updated_at')->latest()
            ->where('freelancer_id', $user_id)
            ->where('status', $status)->take($limit)->get();
    }

    /**
     * Get milestones by status.
     *
     * @param mixed $job_skills job skill
     *
     * @return \Illuminate\Http\Response
     */
    public function getJobSkillRequirement($job_skills)
    {
        $json = array();
        $skill = '';
        if (!empty($job_skills)) {
            $freelancer_skills = auth()->user()->skills->pluck('id')->toArray();
            foreach ($job_skills as $key => $skill) {
                if (!(in_array($skill, $freelancer_skills))) {
                    $json[$key] = $skill;
                }

            }
            return $json;
        }
    }

    /**
     * Get milestones by status.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFreelancersTotalAmount()
    {
        $this::where('status', 'Released')->sum(amount);
    }

    /**
     * Delete milestone from storage
     *
     * @param string $id ID
     *
     * @return \Illuminate\Http\Response
     */
    public static function deleteRecord($id)
    {
        $proposal = self::find($id);
        $job = Job::find($proposal->job->id);
        if (!empty($job) && $job->status == 'hired') {
            $job->status = 'posted';
            $job->save();
        }
        return $proposal->delete();
    }
}
