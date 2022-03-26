<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use Session;
use Redirect;
use PDF;
use DateTime;
use DatePeriod;
use DateInterval;
use App\typeofSeller;

class typeOfSellerController extends Controller
{
    public function typeofSellerMaster(REQUEST $request) {
        $typeofSeller = typeofSeller::paginate(8);

        $pageName = 'Content/Master/typeofSeller';
        return view('index', compact('pageName','typeofSeller'));
    }

    public function typeofSellerMasterCreate(REQUEST $request) {
        $typeofSellerADD = new typeofSeller();
        $typeofSellerADD->name = $request->typeofSellerName;
        $typeofSellerADD->created_at = date('Y-m-d');
        $typeofSellerADD->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/type-of-seller');
    }
    
    public function typeofSellerMasterUpdate(REQUEST $request, $id) {
        $typeofSellerUpdate = typeofSeller::find($id);
        $typeofSellerUpdate->name = $request->typeofSellerName;
        if($request->has('status')){
            $typeofSellerUpdate->status = 1;
        }else{
            $typeofSellerUpdate->status = 0;
        }
        $typeofSellerUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/type-of-seller');
    }
}
