<?php

namespace App\Http\Controllers;

use App\AccType;
use App\Agent;
use App\BankingDetail;
use App\BusinessCategory;
use App\BusinessSize;
use App\CompanyDetail;
use App\ContactDetail;
use App\Http\Requests\RegisterBankAndLoginRequest;
use App\Http\Requests\RegisterCompanyRequest;
use App\Http\Requests\RegisterContactRequest;
use App\IndustryCategory;
use App\Institution;
use App\Profession;
use App\Region;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PublicRegisterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    ///REGISTER NEW COMPANY (VIEW)
    public function index()
    {
        $businessCategories = BusinessCategory::all();
        $businessSizes = BusinessSize::all();
        $industryCategories = IndustryCategory::orderBy('display_order', 'ASC')->get();
        $regions = Region::all();

        return view('auth.register', compact('businessCategories', 'businessSizes', 'industryCategories', 'regions'));
    }

    //REGISTER NEW COMPANY (STORE)
    public function companyDetailsStore(RegisterCompanyRequest $request)
    {
        //Create New Company
        $company = new CompanyDetail();

        //Extract Industry Categories Array
        $industry_categories = $request['industry_category_id'];

        //Assign Form Values To New Company
        $company->company_name = $request->company_name;
        $company->trading_name = $request->trading_name;
        $company->registration_number = $request->registration_number;
        $company->vat_number = $request->vat_number;
        $company->business_size_id = $request->business_size_id;
        $company->business_category_id = $request->business_category_id;
        $company->save();

        //Extract Regions Array and attach
        $regions = $request['region_ids'];

        if($regions){
            foreach ($regions as $region) {
                $company->region()->attach($region);
            }
        }


        //Extract Regions Array and attach
        $industry_categories = $request['category_ids'];

        if($industry_categories){
            foreach ($industry_categories as $category) {
                $company->IndustryCategory()->attach($category);
            }
        }

        //Extract Company Id To Pass Through To Next Form
        $company_id = $company->id;
        Session::flash('form-success','The form was successfully submitted, Please continue to the next step');
        //Redirect To Contact Details Form
        return view('auth.register-contact-details', compact('company_id'));
    }

    ///REGISTER NEW COMPANY CONTACT DETAILS (VIEW)
    public function contactRegister()
    {
        return view('auth.register-contact-details');
    }

    ///REGISTER NEW COMPANY CONTACT DETAILS (STORE)
    public function contactRegisterStore(RegisterContactRequest $request)
    {
        //Extract Form Data
        $input = $request->all();

        //Check if physical address is the same as postal address
        if (isset($input['postal=physical']) && $input['postal=physical'] === 'on') {
            $input['postal_address_1'] = $input['physical_address_1'];
            $input['postal_address_2'] = $input['physical_address_2'];
            $input['postal_address_3'] = $input['physical_address_3'];

            ContactDetail::create($input);

        } else {

            //Create New Contact Details
            ContactDetail::create($request->all());
        }

        $company_id = $input['company_detail_id'];

        //Extract Drop down Info
        $institutions = Institution::all();
        $account_types = AccType::all();
        $agents = Agent::all();
        $professions = Profession::all();

        Session::flash('form-success','The form was successfully submitted, Please continue to the next step');
        return view('auth.register-bank-and-login-details', compact('company_id', 'institutions', 'account_types', 'agents', 'professions'));
    }

    //REGISTER NEW COMPANY BANKING AND LOGIN DETAILS (VIEW)
    public function bankAndLoginRegister()
    {
        $institutions = Institution::all();
        $account_types = AccType::all();
        $agents = Agent::all();
        $professions = Profession::all();


        return view('auth.register-bank-and-login-details', compact('institutions', 'account_types', 'agents', 'professions'));
    }

    //REGISTER NEW COMPANY BANKING AND LOGIN DETAILS (STORE)
    public function bankAndLoginRegisterStore(RegisterBankAndLoginRequest $request)
    {

        //Banking Details
        $baking_details = new BankingDetail();

        $baking_details->company_detail_id = $request->company_detail_id;
        $baking_details->acc_name = $request->acc_name;
        $baking_details->acc_number = $request->acc_number;
        $baking_details->institution_id = $request->institution_id;
        $baking_details->acc_type_id = $request->acc_type_id;
        $baking_details->branch_name = $request->branch_name;
        $baking_details->branch_code = $request->branch_code;
        $baking_details->save();

        //Login Details
        $user = new User();

        $user->role_id = 2;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->status = 'pending';
        $user->password = bcrypt($request->password);
        $user->security_question = $request->security_question;
        $user->security_answer = $request->security_answer;
        $user->agent_id = $request->agent_id;
        $user->profession_id = $request->profession_id;
        $user->company_detail_id = $request->company_detail_id;
        $user->save();

        $reference_number = $user->id;

        Session::flash('form-success','The form was successfully submitted, Please read and accept our terms and conditions');
        return view('auth.accept-terms-and-conditions');
    }

    public function creditHealth()
    {

        return view('public.credithealth.credithealth');
    }

    public function registerDisclaimer(){
        Session::flash('form-success','Thank you for accepting our Terms & Conditions, Please read and accept our Disclaimer');

        return view('auth.accept-disclaimer');

    }

    public function registerComplete(){
        return view('auth.register-complete');
    }

    public function paymentComplete(){
        return view('auth.payment-complete');
    }

    public function resetFailed(){
        return view('auth.passwords.reset-failed');
    }

    public function survey(){
        return view('public.survey');
    }

    public function surveyComplete(){
        return view('public.survey-complete');
    }

}
//return redirect('login')->with('status', 'Your account has successfully been created, you can now login!');