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

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

//use the Rave Facade
use Rave;
use App\SiteManagement;

/**
 * Class RaveController
 *
 */
class RaveController extends Controller
{
    public function initialize() {

	    //This initializes payment and redirects to the payment gateway
	    //The initialize method takes the parameter of the redirect URL
	    Rave::initialize(route('callback'));  
  	}
  
  	public function callback() {
  		if (Auth::user()) {
		    // This verifies the transaction and takes the parameter of the transaction reference
		    $data = Rave::verifyTransaction(request()->txref);
		    $settings = SiteManagement::getMetaValue('commision');
	        // $profile = Profile::where('user_id', Auth::user()->id)->get()->first();
	        // if (!empty($profile->transaction_currency)) {
	        //     $currency = $profile->transaction_currency;
	        // } elseif (!empty($settings[0]['currency'])) {
	        if (!empty($settings[0]['currency'])) {
	            $currency = $settings[0]['currency'];
	        } else {
	            $currency = 'USD';
	        }
		    $chargeResponsecode = $data->data->chargecode;
		    $chargeAmount = $data->data->amount;
		    $chargeCurrency = $data->data->currency;
		    $amount = "90";
		    $currency = 'NGN';
		    // $country = filter_var($request['country'], FILTER_SANITIZE_STRING);
		    // $currency = filter_var($request['currency'], FILTER_SANITIZE_STRING);
		    // $amount = filter_var($request['amount'], FILTER_SANITIZE_STRING);
		    // $email = filter_var($request['email'], FILTER_SANITIZE_STRING);
		    // $phonenumber = filter_var($request['phonenumber'], FILTER_SANITIZE_STRING);

		    if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {

			    // transaction was successful...
			    // please check other things like whether you already gave value for this ref
			    // if the email matches the customer who owns the product etc
			    //Give Value and return to Success page
	            
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
        // return redirect('/success');
	    
		    } else {
		    // } else {
		    	
		        //Dont Give Value and return to Failure page
		    	// $json['type'] = 'error';
	            // $json['message'] = 'Wrong';
	            // return $json;
		        return redirect('/failed');
		    }
		} else {
	            abort(404);
	    }
	    // dd($data->data);
  	}
}
