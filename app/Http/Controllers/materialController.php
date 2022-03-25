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
use App\subCategory;
use App\category;
use App\material;
use App\workSpot;
use App\units;

class materialController extends Controller
{
    public function materialMaster(REQUEST $request) {
        $material = material::select('material.categoryID', 'material.subCategoryID', 'material.workSpotID', 'material.unitID', 'material.description', 'material.rate', 'material.qty', 'material.rackNo', 'material.qtyInUse', 'material.criticalQty', 'material.status', 'material.id', 'category.name as categoryName', 'sub_category.name as subCategoryName','work_spot.name as workSpotName', 'units.name as unitsName')
                                   ->leftJoin('category', 'category.id', '=', 'material.categoryID')
                                   ->leftJoin('sub_category', 'sub_category.id', '=', 'material.subCategoryID')
                                   ->leftJoin('work_spot', 'work_spot.id', '=', 'material.workSpotID')
                                   ->leftJoin('units', 'units.id', '=', 'material.unitID')
                                   ->paginate(8);

        $category = category::where('status', '1')->get();
        $subCategory = subCategory::where('status', '1')->get();
        $workSpot = workSpot::where('status', '1')->get();
        $units = units::where('status', '1')->get();

        $pageName = 'Content/Master/material';
        return view('index', compact('pageName','material','category','subCategory','workSpot','units'));
    }

    public function materialMasterCreate(REQUEST $request) {
        $materialADD = new material();
        $materialADD->categoryID = $request->categoryId;
        $materialADD->subCategoryID = $request->subCategoryId;
        $materialADD->workSpotID = 1;
        $materialADD->unitID = 1;
        // $materialADD->workSpotID = $request->workSpotId;
        // $materialADD->unitID = $request->unitId;
        $materialADD->description = $request->description;
        $materialADD->rate = $request->rate;
        $materialADD->qty = $request->quantity;
        $materialADD->rackNo = $request->rackNo;
        $materialADD->qtyInUse = $request->inUseQuantity;
        $materialADD->criticalQty = $request->criticalQuantity;
        $materialADD->created_at = date('Y-m-d');
        $materialADD->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/material');
    }

    public function materialMasterUpdate(REQUEST $request, $id) {
        $materialUpdate = material::find($id);
        $materialUpdate->categoryID = $request->categoryId;
        $materialUpdate->subCategoryID = $request->subCategoryId;
        $materialUpdate->workSpotID = 1;
        $materialUpdate->unitID = 1;
        // $materialUpdate->workSpotID = $request->workSpotId;
        // $materialUpdate->unitID = $request->unitId;
        $materialUpdate->description = $request->description;
        $materialUpdate->rate = $request->rate;
        $materialUpdate->qty = $request->quantity;
        $materialUpdate->rackNo = $request->rackNo;
        $materialUpdate->qtyInUse = $request->inUseQuantity;
        $materialUpdate->criticalQty = $request->criticalQuantity;
        if($request->has('status')){
            $materialUpdate->status = 1;
        }else{
            $materialUpdate->status = 0;
        }
        $materialUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/material');
    }
}
