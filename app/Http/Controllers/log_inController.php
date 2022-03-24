<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Mail;
use Session;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class log_inController extends Controller
{
    public function log_in(){
        $pageName = 'Auth/login';
        $LoginPage = true;
        return view('index', compact('pageName','LoginPage'));
    }
    
    public function log_in_config(REQUEST $request){
        // $password = $request->password;
        // $user_id  = $request->user_id; 
        // $data = user_table::where('user_id',$user_id)->where('password',$password)->first();
        // $company_master = company_master::first();
        // if($data){
        //     $request->session()->put('read_in_out',$user_role->read_in_out);
        //     return \redirect('/dashboard');
        // }
        // else{
        //     $error = 1;
        //     return view('Auth/login',\compact('error'));
        // }
        return \redirect('/dashboard');
    }
    
    
}
