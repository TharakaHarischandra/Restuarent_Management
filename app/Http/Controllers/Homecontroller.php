<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Homecontroller extends Controller
{
    public function index(){

       
            return view('user.home');
       
        
        
    }

    public function redirect(){
        
        
        if(Auth::id()){
            $usertype = Auth::User()->usertype;
            //  dd($usertype);
            if($usertype == 1){
                return view('admin.admin');
            }
            else{
                return view('user.home');
                
            }   
            
        }
        else{
            return view('auth.login');
        }
    }
}
