<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;
use Session;
use Redirect;
use PDF;
use DateTime;
use DatePeriod;
use DateInterval;
use App\category;

class categoryController extends Controller
{
    public function catagoryMaster(REQUEST $request) {
        $category = category::paginate(8);
        $pageName = 'Content/Master/category';
        return view('index', compact('pageName','category'));
    }
    
    public function catagoryMasterCreate(REQUEST $request) {
        $categoryADD = new category();
        $categoryADD->name = $request->categoryName;
        $categoryADD->created_at = date('Y-m-d');
        $categoryADD->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/category');
    }
    
    public function catagoryMasterUpdate(REQUEST $request, $id) {
        $categoryUpdate = category::find($id);
        $categoryUpdate->name = $request->categoryName;
        if($request->has('status')){
            $categoryUpdate->status = 1;
        }else{
            $categoryUpdate->status = 0;
        }
        $categoryUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/category');
    }
}
