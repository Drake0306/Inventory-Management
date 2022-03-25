<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Mail;
use Session;
use Redirect;
use PDF;
use DateTime;
use DatePeriod;
use DateInterval;
use App\Company;
use App\category;
use App\material;
use App\subCategory;
use App\typeOfSeller;
use App\units;
use App\vendor;
use App\workSpot;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class viewController extends Controller
{
    // public function __construct(){
    //     $this->middleware('check_jobseeker');
    // }

    public function dashboardView(REQUEST $request) {
        $pageName = 'Content/dashboard';
        return view('index', compact('pageName'));
    }
    
    public function companyMaster(REQUEST $request) {
        $Company = Company::paginate(8);
        $pageName = 'Content/Admin/Company';
        return view('index', compact('pageName','Company'));
    }
    
    public function companyMasterCreate(REQUEST $request) {
        $CompanyAdd = new Company();
        $CompanyAdd->name = $request->companyName;
        $CompanyAdd->location = $request->locationName;
        $CompanyAdd->created_at = date('Y-m-d');
        $CompanyAdd->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/company');
    }
    
    public function companyMasterUpdate(REQUEST $request, $id) {
        $CompanyUpdate = Company::find($id);
        $CompanyUpdate->name = $request->companyName;
        $CompanyUpdate->location = $request->locationName;
        if($request->has('status')){
            $CompanyUpdate->status = 1;
        }else{
            $CompanyUpdate->status = 0;
        }
        $CompanyUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/company');
    }
    
    public function userMaster(REQUEST $request) {
        $pageName = 'Content/Admin/User';
        return view('index', compact('pageName'));
    }
    
    public function vendorMaster(REQUEST $request) {
        $pageName = 'Content/Master/vendor';
        return view('index', compact('pageName'));
    }
    
    public function unitsMaster(REQUEST $request) {
        $pageName = 'Content/Master/units';
        return view('index', compact('pageName'));
    }
    
    public function typeofSellerMaster(REQUEST $request) {
        $pageName = 'Content/Master/typeofSeller';
        return view('index', compact('pageName'));
    }
    
    public function workSpotsMaster(REQUEST $request) {
        $pageName = 'Content/Master/work-spots';
        return view('index', compact('pageName'));
    }

    

}
