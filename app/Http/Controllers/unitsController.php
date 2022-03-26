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
use App\units;

class unitsController extends Controller
{
    public function unitsMaster(REQUEST $request) {
        $units = units::paginate(8);

        $pageName = 'Content/Master/units';
        return view('index', compact('pageName','units'));
    }

    public function unitsMasterCreate(REQUEST $request) {
        $unitsADD = new units();
        $unitsADD->name = $request->UnitsName;
        $unitsADD->created_at = date('Y-m-d');
        $unitsADD->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/units');
    }
    
    public function unitsMasterUpdate(REQUEST $request, $id) {
        $unitsUpdate = units::find($id);
        $unitsUpdate->name = $request->UnitsName;
        if($request->has('status')){
            $unitsUpdate->status = 1;
        }else{
            $unitsUpdate->status = 0;
        }
        $unitsUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/units');
    }
}
