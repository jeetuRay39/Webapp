<?php namespace App\Controllers\admin;
use App\Controllers\BaseController;
class Login extends BaseController{
    public function loginpage(){
        return view('admin/login'); 

    }
}