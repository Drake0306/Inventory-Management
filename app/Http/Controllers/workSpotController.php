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
use App\workSpot;

class workSpotController extends Controller
{
    public function workSpotsMaster(REQUEST $request) {
        $workSpot = workSpot::paginate(8);
        $pageName = 'Content/Master/work-spots';
        return view('index', compact('pageName','workSpot'));
    }

    public function workSpotsMasterCreate(REQUEST $request) {
        $workSpotADD = new workSpot();
        $workSpotADD->name = $request->workSpotName;
        $workSpotADD->created_at = date('Y-m-d');
        $workSpotADD->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/work-spots');
    }
    
    public function workSpotsMasterUpdate(REQUEST $request, $id) {
        $workSpotUpdate = workSpot::find($id);
        $workSpotUpdate->name = $request->workSpotName;
        if($request->has('status')){
            $workSpotUpdate->status = 1;
        }else{
            $workSpotUpdate->status = 0;
        }
        $workSpotUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/work-spots');
    }
}
