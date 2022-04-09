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
use App\subCategory;
use App\category;
use App\material;
use App\workSpot;
use App\units;
use App\vendor;
use App\type;

class vendorController extends Controller
{
        
    public function vendorMaster(REQUEST $request) {
        $vendor = vendor::select('vendor.categoryID', 'vendor.type', 'vendor.name', 'vendor.address', 'vendor.phone', 'vendor.email', 'vendor.status', 'vendor.id', 'category.name as categoryName', 'type.name as typeName')
                            ->leftJoin('category', 'category.id', '=', 'vendor.categoryID')
                            ->leftJoin('type', 'type.id', '=', 'vendor.type')
                            ->paginate(8);

        $category = category::where('status', '1')->get();
        $type = type::where('status', '1')->get();

        $pageName = 'Content/Master/vendor';
        return view('index', compact('pageName','vendor','category','type'));
    }

    public function vendorMasterCreate(REQUEST $request) {
        $vendorADD = new vendor();
        $vendorADD->categoryID = $request->categoryId;
        $vendorADD->type = $request->type;
        $vendorADD->name = $request->name;
        $vendorADD->address = $request->address;
        $vendorADD->phone = $request->phone;
        $vendorADD->email = $request->email;
        $vendorADD->created_at = date('Y-m-d');
        $vendorADD->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/vendor');
    }

    public function vendorMasterUpdate(REQUEST $request, $id) {
        $vendorUpdate = vendor::find($id);
        $vendorUpdate->categoryID = $request->categoryId;
        $vendorUpdate->type = $request->type;
        $vendorUpdate->name = $request->name;
        $vendorUpdate->address = $request->address;
        $vendorUpdate->phone = $request->phone;
        $vendorUpdate->email = $request->email;
        if($request->has('status')){
            $vendorUpdate->status = 1;
        }else{
            $vendorUpdate->status = 0;
        }
        $vendorUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/vendor');
    }
}
