<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taxProfile;
use auth;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    public function UserProfile(){   
        $my = Auth::user();
        return view('user.index',compact('my'));
    } 
    public function updateUserProfile(Request $r){
        $my = Auth::user();
        if ($r->hasFile('image')) {
            $r->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $r->image->store('public/images');
            $my->image = $image;
        }
        $my->name = $r->name;
        $my->address = $r->address;
        $my->about = $r->about;
        $my->save();
        return back()->with('success','profile update success!');
    }

    public function changePassword(Request $r){

        $r->validate([
            'password' => 'required|min:8',
            'new_password' => 'required|min:8',
            'c_new_password' => 'required|min:8',
        ]);


        if($r->new_password != $r->c_new_password){
            return back()->withErrors(['password' => ['Please use same password']]);
        }

        $my  = Auth::user();
       

        if(!Hash::check($r->password, $my->password)){
            return back()->withErrors(['password' => ['Wrong password']]);
        }

        $my->password = Hash::make($r->new_password);
        $my->save();
        return back()->with('success','password update success!');
    }




    public function taxProfile(){

        $info = Auth::user()->taxProfile;
        return view('tax.profile',compact('info'));
    }

    public function updateTaxProfile(Request $r){
        $r->validate([
            'name' => 'required',
            'tin' => 'required',
            'circle' => 'required',
            'tax_zone' => 'required',
            'assessment_year' => 'required',
            'residential_status' => 'required',
            'status' => 'required',
            'name_of_business' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'date_of_birth' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'phone_business' => 'required',
            'phone_residential' => 'required',
            'vat_registration_number' => 'required' 
        ]);


        $info = Auth::user()->taxProfile;


        $info->name = $r->name;
        $info->tin = $r->tin;
        $info->circle = $r->circle;
        $info->tax_zone = $r->tax_zone;
        $info->assessment_year = $r->assessment_year;
        $info->residential_status = $r->residential_status;
        $info->status = $r->status;
        $info->name_of_business = $r->name_of_business;
        $info->father_name = $r->father_name;
        $info->mother_name = $r->mother_name;
        $info->date_of_birth = $r->date_of_birth;
        $info->present_address = $r->present_address;
        $info->permanent_address = $r->permanent_address;
        $info->phone_business = $r->phone_business;
        $info->phone_residential = $r->phone_residential;
        $info->vat_registration_number = $r->vat_registration_number;
        $info->save();
        return back()->with('success','tax profile update success!');

    }

    public function detailsIncome(){
        return view('income.details');
    }

    public function taxForm(){
        $info = Auth::user()->taxForm;
        return view('tax.form',compact('info'));
    }
    public function updateTaxForm(Request $r){
        
        $r->validate([
            'field_1' => 'required',
            'field_1_comment' => 'required',
            'field_2' => 'required',
            'field_2_comment' => 'required',
            'field_3' => 'required',
            'field_3_comment' => 'required',
            'field_4' => 'required',
            'field_4_comment' => 'required',
            'field_5' => 'required',
            'field_5_comment' => 'required',
            'field_6' => 'required',
            'field_6_comment' => 'required',
            'field_7' => 'required',
            'field_7_comment' => 'required',
            'field_8' => 'required',
            'field_8_comment' => 'required',
            'field_9' => 'required',
            'field_9_comment' => 'required',
            'field_10' => 'required',
            'field_10_comment' => 'required',
            'field_11' => 'required',
            'field_11_comment' => 'required'
        ]);

          $info = Auth::user()->taxForm;

          $info->field_1 = $r->field_1;
          $info->field_1_comment = $r->field_1_comment;

          $info->field_2 = $r->field_2;
          $info->field_2_comment = $r->field_2_comment;

          $info->field_3 = $r->field_3;
          $info->field_3_comment = $r->field_3_comment;

          $info->field_4 = $r->field_4;
          $info->field_4_comment = $r->field_4_comment;

          $info->field_5 = $r->field_5;
          $info->field_5_comment = $r->field_5_comment;

          $info->field_6 = $r->field_6;
          $info->field_6_comment = $r->field_6_comment;

          $info->field_7 = $r->field_7;
          $info->field_7_comment = $r->field_7_comment;

          $info->field_8 = $r->field_8;
          $info->field_8_comment = $r->field_8_comment;

          $info->field_9 = $r->field_9;
          $info->field_9_comment = $r->field_9_comment;

          $info->field_10 = $r->field_10;
          $info->field_10_comment = $r->field_10_comment;

          $info->field_11 = $r->field_11;
          $info->field_11_comment = $r->field_11_comment;

          $info->save();

          return back()->with('success','update success');

    }
}
