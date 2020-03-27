<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taxProfile;
use auth;
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
    public function index()
    {
        return view('home');
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
}
