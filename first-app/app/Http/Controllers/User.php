<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class User extends Controller
{
    function getUser(){
        return view('user');
    }
    function getUsername($username){
        return view('username',[
            'username' => $username
        ]);
    }
    function adminLogin(){
        //Check if the view exists
        if(!View::exists('admin.sign')){
            echo "View not found";
        }
        else return view('admin.login');
    }
}
