<?php


/**
 * Class RaveController
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\FreelancerLevel;
use App\Invoice;
use App\Item;
use Carbon\Carbon;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\SiteManagement;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Helper;
use Auth;
use DB;
use App\Package;
use Illuminate\Support\Facades\Mail;
use App\Proposal;
use App\Milestone;
use App\EmailTemplate;
use App\Mail\FreelancerEmailMailable;
use App\Mail\EmployerEmailMailable;
use App\Job;
use App\Message;
use App\Service;
//use the Rave Facade
use Rave;


/**
 * Class RaveController
 *
 */
class RaveController extends Controller
{

    /**
     * Defining scope of the variable
     *
     * @access public
     * @var    array $provider
     * @var    array $payout_settings
     * @var    array $currency
     */
    protected $provider;

    protected $payout_settings;
    
    protected $currency;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->provider = new ExpressCheckout();
        $this->payout_settings = SiteManagement::getMetaValue('commision');
        if (!empty($this->payout_settings[0]['currency'])) {
            $this->currency = $this->payout_settings[0]['currency'];
        } else {
            $this->currency = 'USD';
        }
    }

    /**
     * Get index.
     *
     * @param mixed $request $req->attr
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        if (Auth::user()) {
            $response = [];
            if (session()->has('code')) {
                $response['code'] = session()->get('code');
                session()->forget('code');
            }
            if (session()->has('message')) {
                $response['message'] = session()->get('message');
                session()->forget('message');
            }
            $error_code = session()->get('code');
            Session::flash('payment_message', $response);
            $product_type = session()->get('type');
            $project_type = session()->get('project_type');
            if (Auth::user()->getRoleNames()[0] == "employer") {
                if ($product_type == 'project') {
                    if ($project_type == 'service') {
                        return Redirect::to('employer/services/hired');
                    } else {
                        return Redirect::to('employer/jobs/hired');
                    }
                } else {
                    return Redirect::to('dashboard/packages/employer');
                }
            } else if (Auth::user()->getRoleNames()[0] == "freelancer") {
                session()->forget('type');
                return Redirect::to('dashboard/packages/freelancer');
            }
        } else {
            abort(404);
        }
    }

    public function initialize(Request $request)
    {
        $settings = SiteManagement::getMetaValue('rave_settings');
        $payment_mode = !empty($settings) && !empty($settings[0]['enable_test']) ? $settings[0]['enable_test'] : 'false';
        if ($payment_mode == 'true') {
            if (empty(env('RAVE_PUBLIC_KEY'))
                && empty(env('RAVE_SECRET_KEY'))
                && empty(env('RAVE_SECRET_HASH'))
            ) {
                Session::flash('error', trans('lang.rave_empty_credentials'));
                return Redirect::back();
            }
        } elseif ($payment_mode == 'false') {
            if (empty(env('RAVE_PUBLIC_KEY'))
                && empty(env('RAVE_SECRET_KEY'))
                && empty(env('RAVE_SECRET_HASH'))
            ) {
                Session::flash('error', trans('lang.rave_empty_credentials'));
                return Redirect::back();
            }
        }

        if (Auth::user()) {
            Rave::initialize(route('callback'));
        } else {
            abort(404);
        }
        // if ($request->amount > 950) {
        //     Session::flash('error', trans('lang.pay_amount_required'));
        //     return Redirect::back();
        // }
        //This initializes payment and redirects to the payment gateway
        //The initialize method takes the parameter of the redirect URL
        
    }

    public function callback(Request $request)
    {
        if (Auth::user()) {
            //$recurring = ($request->get('mode') === 'recurring') ? true : false;
            $recurring = false;
            $success = true;
            $cart = $this->getCheckoutData($recurring, $success);
            // This verifies the transaction and takes the parameter of the transaction reference
            $data = Rave::verifyTransaction(request()->txref);
            $chargeResponsecode = $data->data->chargecode;
            $status = $data->data->status;
            // $chargeAmount = $data->data->amount;
            // $chargeCurrency = $data->data->currency;
            $payment_detail = array();
            if (($chargeResponsecode == "00" || $chargeResponsecode == "0") || $data->status == 'success' || $status == 'successful') {
                // transaction was successful...
                // please check other things like whether you already gave value for this ref
                // if the email matches the customer who owns the product etc
                //Give Value and return to Success page
                $data = $data->data;
                // $payment_detail["txid"] = $data->txid;
                // $payment_detail["txref"] = $data->txref;
                // $payment_detail["flwref"] = $data->flwref;
                // $payment_detail["devicefingerprint"] = $data->devicefingerprint;
                // $payment_detail["cycle"] = $data->cycle;
                // $payment_detail["amount"] = $data->amount;
                // $payment_detail["currency"] = $data->currency;
                // $payment_detail["chargedamount"] = $data->chargedamount;
                // $payment_detail["appfee"] = $data->appfee;
                // $payment_detail["merchantfee"] = $data->merchantfee;
                // $payment_detail["merchantbearsfee"] = $data->merchantbearsfee;
                // $payment_detail["chargecode"] = $data->chargecode;
                // $payment_detail["chargemessage"] = $data->chargemessage;
                // $payment_detail["authmodel"] = $data->authmodel;
                // $payment_detail["narration"] = $data->narration;
                // $payment_detail["status"] = $data->status;
                // $payment_detail["vbvcode"] = $data->vbvcode;
                // $payment_detail["vbvmessage"] = $data->vbvmessage;
                // $payment_detail["authurl"] = $data->authurl;
                // $payment_detail["acctcode"] = $data->acctcode;
                // $payment_detail["acctmessage"] = $data->acctmessage;
                // $payment_detail["paymenttype"] = $data->paymenttype;
                // $payment_detail["paymentid"] = $data->paymentid;
                // $payment_detail["fraudstatus"] = $data->fraudstatus;
                // $payment_detail["chargetype"] = $data->chargetype;
                // $payment_detail["createdday"] = $data->createdday;
                // $payment_detail["createddayname"] = $data->createddayname;
                // $payment_detail["createdweek"] = $data->createdweek;
                // $payment_detail["createdmonth"] = $data->createdmonth;
                // $payment_detail["createdmonthname"] = $data->createdmonthname;
                // $payment_detail["createdquarter"] = $data->createdquarter;
                // $payment_detail["createdyear"] = $data->createdyear;
                // $payment_detail["createdyearisleap"] = $data->createdyearisleap;
                // $payment_detail["createddayispublicholiday"] = $data->createddayispublicholiday;
                // $payment_detail["createdhour"] = $data->createdhour;
                // $payment_detail["createdminute"] = $data->createdminute;
                // $payment_detail["createdpmam"] = $data->createdpmam;
                // $payment_detail["created"] = $data->created;
                // $payment_detail["customerid"] = $data->customerid;
                // $payment_detail["custphone"] = $data->custphone;
                // $payment_detail["custnetworkprovider"] = $data->custnetworkprovider;
                // $payment_detail["payer_name"] = $data->custname;
                // $payment_detail["payer_email"] = $data->custemail;
                // $payment_detail["seller_email"] = $data->custemailprovider;
                // $payment_detail["custcreated"] = $data->custcreated;
                // $payment_detail["accountid"] = $data->accountid;
                // $payment_detail["acctbusinessname"] = $data->acctbusinessname;
                // $payment_detail["acctcontactperson"] = $data->acctcontactperson;
                // $payment_detail["acctcountry"] = $data->acctcountry;
                // $payment_detail["acctbearsfeeattransactiontime"] = $data->acctbearsfeeattransactiontime;
                // $payment_detail["acctparent"] = $data->acctparent;
                // $payment_detail["acctvpcmerchant"] = $data->acctvpcmerchant;
                // $payment_detail["acctalias"] = $data->acctalias;
                // $payment_detail["acctisliveapproved"] = $data->acctisliveapproved;
                // $payment_detail["orderref"] = $data->orderref;
                // $payment_detail["paymentplan"] = $data->paymentplan;
                // $payment_detail["paymentpage"] = $data->paymentpage;
                // $payment_detail["raveref"] = $data->raveref;
                // var_dump($data); exit;
                $success = false;
                $cart = $this->getCheckoutData($recurring, $success);
                $payment_detail["payer_name"] = $data->custname;
                $payment_detail["payer_email"] = $data->custemail;
                $payment_detail["seller_email"] = 'taofiktijani@gmail.com';
                $payment_detail['currency_code'] = $data->currency;
                $payment_detail['payer_status'] = $data->fraudstatus;
                $payment_detail['transaction_id'] = $data->txref;
                $payment_detail['sales_tax'] = 0;
                $payment_detail['invoice_id'] = $data->txid;
                $payment_detail['customer_id'] = $data->customerid;
                $payment_detail['shipping_amount'] = 0;
                $payment_detail['handling_amount'] = 0;
                $payment_detail['insurance_amount'] = 0;
                $payment_detail['paypal_fee'] = $data->appfee;
                $payment_detail['payment_date'] = $data->created;
                $payment_detail['product_qty'] = $cart['items'][0]['qty'];
            }
            $invoice = $this->createInvoice($cart, $status, $payment_detail);
            
            if ($invoice->paid) {
                session()->put(['code' => 'success', 'message' => "Thank you for your subscription"]);
            } else {
                session()->put(['code' => 'danger', 'message' => "Error processing Rave payment for Order $invoice->id!"]);
            }
            return redirect('paypal/redirect-url');
        } else {
            abort(404);
        }
    }

    /**
     * Get Express Checkout Success.
     *
     * @param mixed $recurring $recurring
     * @param mixed $success   $recurring
     *
     * @return \Illuminate\Http\Response
     */

    function getCheckoutData($recurring, $success)
    {
        if (Auth::user()) {
            if (session()->has('product_id')) {
                $id = session()->get('product_id');
                $title = session()->get('product_title');
                $price = session()->get('product_price');
                $user_id = Auth::user()->id;
                if ($success == true) {
                    DB::table('orders')->insert(
                        ['user_id' => $user_id, 'product_id' => $id, 'invoice_id' => null, 'status' => 'pending', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
                    );
                    session()->put(['custom_order_id' => DB::getPdo()->lastInsertId()]);
                }
                $random_number = Helper::generateRandomCode(4);
                $unique_code = strtoupper($random_number);
                $data = [];
                $order_id = Invoice::all()->count() + 1;
                if ($recurring === true) {
                    $data['items'] = [
                        [
                            'name' => 'Monthly Subscription ' . config('rave.prefix') . ' #' . $order_id,
                            'price' => 0,
                            'qty' => 1,
                        ],
                    ];
                    $data['return_url'] = url('/rave/ec-checkout-success?mode=recurring');
                    $data['subscription_desc'] = 'Monthly Subscription ' . config('rave.prefix') . ' #' . $order_id;
                } else {
                    $data['items'] = [
                        [
                            'product_id' => $id,
                            'subscriber_id' => $user_id,
                            'name' => $title,
                            'price' => $price,
                            'qty' => 1,
                        ],

                    ];
                    $data['return_url'] = url('/rave/ec-checkout-success');
                }
                $data['invoice_id'] = config('rave.prefix') . '_' . $unique_code . '_' . $order_id;
                $data['invoice_description'] = "Order #$order_id Invoice";
                $data['cancel_url'] = url('/');
                $total = 0;
                foreach ($data['items'] as $item) {
                    $total += $item['price'] * $item['qty'];
                }
                $data['total'] = $total;

                return $data;
            } else {
                abort(404);
            }
        } else {
            Session::flash('message', trans('lang.product_id_not_found'));
            return Redirect::to('/');
        }
    }

    function createInvoice($cart, $status, $payment_detail)
    {
       
        //create invoice
        $invoice = new Invoice();
        $invoice->title = filter_var($cart['invoice_description'], FILTER_SANITIZE_STRING);
        $invoice->price = $cart['total'];
        $invoice->payer_name = filter_var($payment_detail['payer_name'], FILTER_SANITIZE_STRING);
        $invoice->payer_email = filter_var($payment_detail['payer_email'], FILTER_SANITIZE_EMAIL);
        $invoice->seller_email = filter_var($payment_detail['seller_email'], FILTER_SANITIZE_EMAIL);
        $invoice->currency_code = filter_var($payment_detail['currency_code'], FILTER_SANITIZE_STRING);
        $invoice->customer_id = filter_var($payment_detail['customer_id'], FILTER_SANITIZE_STRING);
        $invoice->payer_status = filter_var($payment_detail['payer_status'], FILTER_SANITIZE_STRING);
        $invoice->transaction_id = filter_var($payment_detail['transaction_id'], FILTER_SANITIZE_STRING);
        $invoice->invoice_id = filter_var($payment_detail['invoice_id'], FILTER_SANITIZE_STRING);
        $invoice->shipping_amount = $payment_detail['shipping_amount'];
        $invoice->handling_amount = $payment_detail['handling_amount'];
        $invoice->insurance_amount = $payment_detail['insurance_amount'];
        $invoice->sales_tax = $payment_detail['sales_tax'];
        $invoice->payment_mode = filter_var('rave', FILTER_SANITIZE_STRING);
        $invoice->paypal_fee = filter_var($payment_detail['paypal_fee'], FILTER_SANITIZE_STRING);

        if (!strcasecmp($status, 'successful') || !strcasecmp($status, 'Processed')) {
            $invoice->paid = 1;
        } else {
            $invoice->paid = 0;
        }

        $product_type = session()->get('type');
        $product_id = Session::has('product_id') ? session()->get('product_id') : '';
        $product_title = Session::has('product_title') ? session()->get('product_title') : '';
        $user_id = Auth::user() ? Auth::user()->id : '';
        $product_price = $invoice->price - $invoice->sales_tax;

        $invoice->type = $product_type;
        $invoice->save();
        $invoice_id = DB::getPdo()->lastInsertId();
        if ($product_type == 'package') {
            $item = DB::table('items')->select('id')->where('subscriber', $user_id)->first();
            if (!empty($item)) {
                $item = Item::find($item->id);
            } else {
                $item = new Item();
            }
        } else {
            $item = new Item();
        }
        $item->invoice_id = filter_var($invoice_id, FILTER_SANITIZE_NUMBER_INT);
        $item->product_id = filter_var($product_id, FILTER_SANITIZE_NUMBER_INT);
        $item->subscriber = $user_id;
        $item->item_name = filter_var($product_title, FILTER_SANITIZE_STRING);
        $item->item_price = $product_price;
        $item->item_qty = filter_var(1, FILTER_SANITIZE_NUMBER_INT);
        $item->save();
        $last_order_id = session()->get('custom_order_id');
        DB::table('orders')
            ->where('id', $last_order_id)
            ->update(['status' => 'completed', 'invoice_id' => $invoice_id]);
        if (Auth::user()) {
            if ($product_type == 'package') {
                if (session()->has('product_id')) {
                    $package_item = Item::where('subscriber', Auth::user()->id)->first();
                    $id = session()->get('product_id');
                    $package = Package::find($id);
                    $option = !empty($package->options) ? unserialize($package->options) : '';
                    $expiry = !empty($option) ? $package_item->created_at->addDays($option['duration']) : '';
                    $expiry_date = !empty($expiry) ? Carbon::parse($expiry)->toDateTimeString() : '';
                    $user = User::find(Auth::user()->id);
                    if (!empty($package->badge_id) && $package->badge_id != 0) {
                        $user->badge_id = $package->badge_id;
                    }
                    $user->expiry_date = $expiry_date;
                    $user->save();
                    $profile = Profile::where('user_id', Auth::user()->id)->first();
                    $profile->user()->associate($user_id);
                    if(!empty($user->badge_id) && $user->badge_id > 0) {
                        $freelancer_level = FreelancerLevel::find($user->badge_id)->title;
                        $profile->freelancer_type = $freelancer_level;
                    } else {
                        $profile->freelancer_type = 'Beginner';
                    }
                    $profile->save();
                    // send mail
                    if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
                        $item = DB::table('items')->where('product_id', $id)->get()->toArray();
                        $package = Package::where('id', $item[0]->product_id)->first();
                        $user = User::find($item[0]->subscriber);
                        $role = $user->getRoleNames()->first();
                        $package_options = unserialize($package->options);
                        if (!empty($invoice)) {
                            if ($package_options['duration'] === 'Quarter') {
                                $expiry_date = $invoice->created_at->addDays(4);
                            } elseif ($package_options['duration'] === 'Month') {
                                $expiry_date = $invoice->created_at->addMonths(1);
                            } elseif ($package_options['duration'] === 'Year') {
                                $expiry_date = $invoice->created_at->addYears(1);
                            }
                        }
                        if ($role === 'employer') {
                            if (!empty($user->email)) {
                                $email_params = array();
                                $template = DB::table('email_types')->select('id')->where('email_type', 'employer_email_package_subscribed')->get()->first();
                                if (!empty($template->id)) {
                                    $template_data = EmailTemplate::getEmailTemplateByID($template->id);
                                    $email_params['employer'] = Helper::getUserName(Auth::user()->id);
                                    $email_params['employer_profile'] = url('profile/' . Auth::user()->slug);
                                    $email_params['name'] = $package->title;
                                    $email_params['price'] = $package->cost;
                                    $email_params['currency'] = $this->currency;
                                    $email_params['expiry_date'] = !empty($expiry_date) ? Carbon::parse($expiry_date)->format('M d, Y') : '';
                                    Mail::to(Auth::user()->email)
                                        ->send(
                                            new EmployerEmailMailable(
                                                'employer_email_package_subscribed',
                                                $template_data,
                                                $email_params
                                            )
                                        );
                                }
                            }
                        } elseif ($role === 'freelancer') {
                            if (!empty(Auth::user()->email)) {
                                $email_params = array();
                                $template = DB::table('email_types')->select('id')->where('email_type', 'freelancer_email_package_subscribed')->get()->first();
                                if (!empty($template->id)) {
                                    $template_data = EmailTemplate::getEmailTemplateByID($template->id);
                                    $email_params['freelancer'] = Helper::getUserName(Auth::user()->id);
                                    $email_params['freelancer_profile'] = url('profile/' . Auth::user()->slug);
                                    $email_params['name'] = $package->title;
                                    $email_params['price'] = $package->cost;
                                    $email_params['currency'] = $this->currency;
                                    $email_params['expiry_date'] = !empty($expiry_date) ? Carbon::parse($expiry_date)->format('M d, Y') : '';
                                    Mail::to(Auth::user()->email)
                                        ->send(
                                            new FreelancerEmailMailable(
                                                'freelancer_email_package_subscribed',
                                                $template_data,
                                                $email_params
                                            )
                                        );
                                }
                            }
                        }
                    }
                }
            } elseif ($product_type == 'project') {
                if (session()->has('project_type')) {
                    $project_type = session()->get('project_type');
                    if ($project_type == 'service') {
                        $id = session()->get('product_id');
                        $freelancer = session()->get('service_seller');
                        $service = Service::find($id);
                        $service->users()->attach(Auth::user()->id, ['type' => 'employer', 'status' => 'hired', 'seller_id' => $freelancer]);
                        $service->save();
                        // send message to freelancer
                        $message = new Message();
                        $user = User::find(intval(Auth::user()->id));
                        $message->user()->associate($user);
                        $message->receiver_id = intval($freelancer);
                        $message->body = Helper::getUserName(Auth::user()->id) . ' ' . trans('lang.service_purchase') . ' ' . $service->title;
                        $message->status = 0;
                        $message->save();
                        // send mail
                        if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
                            $email_params = array();
                            $template_data = Helper::getFreelancerNewOrderEmailContent();
                            $email_params['title'] = $service->title;
                            $email_params['service_link'] = url('service/' . $service->slug);
                            $email_params['amount'] = $service->price;
                            $email_params['freelancer_name'] = Helper::getUserName($freelancer);
                            $email_params['employer_profile'] = url('profile/' . $user->slug);
                            $email_params['employer_name'] = Helper::getUserName($user->id);
                            $freelancer_data = User::find(intval($freelancer));
                            Mail::to($freelancer_data->email)
                                ->send(
                                    new FreelancerEmailMailable(
                                        'freelancer_email_new_order',
                                        $template_data,
                                        $email_params
                                    )
                                );
                        }
                    }
                } else {
                    $milestone_id = session()->get('milestone_id');
                    $propasl_id = session()->get('product_id');
                    $proposal = Proposal::find($propasl_id);
                    $result = Proposal::updateStatus($milestone_id, $propasl_id);
                    if ($result == 'success') {
                        $job = Job::find($proposal->job->id);
                        $job->status = 'hired';
                        $job->save();
                        // send message to freelancer
                        $message = new Message();
                        $user = User::find(intval(Auth::user()->id));
                        $message->user()->associate($user);
                        $message->receiver_id = intval($proposal->freelancer_id);
                        $message->body = trans('lang.hire_for') . ' ' . $job->title . ' ' . trans('lang.project');
                        $message->status = 0;
                        $message->save();
                        // send mail
                        if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
                            $freelancer = User::find($proposal->freelancer_id);
                            $employer = User::find($job->user_id);
                            if (!empty($freelancer->email)) {
                                $email_params = array();
                                $template = DB::table('email_types')->select('id')->where('email_type', 'freelancer_email_hire_freelancer')->get()->first();
                                if (!empty($template->id)) {
                                    $template_data = EmailTemplate::getEmailTemplateByID($template->id);
                                    $email_params['project_title'] = $job->title;
                                    $email_params['hired_project_link'] = url('project/' . $job->slug);
                                    $email_params['name'] = Helper::getUserName($freelancer->id);
                                    $email_params['link'] = url('profile/' . $freelancer->slug);
                                    $email_params['employer_profile'] = url('profile/' . $employer->slug);
                                    $email_params['emp_name'] = Helper::getUserName($employer->id);
                                    Mail::to($freelancer->email)
                                        ->send(
                                            new FreelancerEmailMailable(
                                                'freelancer_email_hire_freelancer',
                                                $template_data,
                                                $email_params
                                            )
                                        );
                                }
                            }
                        }
                    }
                }
            }
        }
        session()->forget('product_id');
        session()->forget('milestone_id');
        session()->forget('product_title');
        session()->forget('product_price');
        session()->forget('custom_order_id');
        return $invoice;
    }
}
