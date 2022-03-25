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

class subCategoryController extends Controller
{
    public function subCatagoryMaster(REQUEST $request) {
        $subCategory = subCategory::select('sub_category.name as sub_categoryName', 'sub_category.status', 'sub_category.id', 'sub_category.categoryID', 'category.name as categoryName')
                                   ->leftJoin('category', 'category.id', '=', 'sub_category.categoryID')->paginate(8);
        $category = category::where('status', '1')->get();

        $pageName = 'Content/Master/sub-category';
        return view('index', compact('pageName','subCategory','category'));
    }

    public function subCatagoryMasterCreate(REQUEST $request) {
        $subCategoryADD = new subCategory();
        $subCategoryADD->name = $request->subCategoryName;
        $subCategoryADD->categoryID = $request->categoryId;
        $subCategoryADD->created_at = date('Y-m-d');
        $subCategoryADD->save();

        Session::flash('message', 'Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/sub-category');
    }
   
    public function subCatagoryMasterUpdate(REQUEST $request, $id) {
        $subCategoryUpdate = subCategory::find($id);
        $subCategoryUpdate->name = $request->subCategoryName;
        $subCategoryUpdate->categoryID = $request->categoryId;
        if($request->has('status')){
            $subCategoryUpdate->status = 1;
        }else{
            $subCategoryUpdate->status = 0;
        }
        $subCategoryUpdate->save();

        Session::flash('message', 'Updated Successfully'); 
        Session::flash('alert-class', 'alert-success'); 

        return \redirect('/master/sub-category');
    }
}
