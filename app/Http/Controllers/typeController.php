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
use App\type;

class typeController extends Controller
{
    public function typeMaster(REQUEST $request) {
        $type = type::paginate(8);

        $pageName = 'Content/Master/type';
        return view('index', compact('pageName','type'));
    }

    public function typeMasterCreate(REQUEST $request) {
        $typeADD = new type();
        $typeADD->name = $request->typeName;
        $typeADD->created_at = date('Y-m-d');
        $typeADD->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/type');
    }
    
    public function typeMasterUpdate(REQUEST $request, $id) {
        $typeUpdate = type::find($id);
        $typeUpdate->name = $request->typeName;
        if($request->has('status')){
            $typeUpdate->status = 1;
        }else{
            $typeUpdate->status = 0;
        }
        $typeUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/type');
    }
}
