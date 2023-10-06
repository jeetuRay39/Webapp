<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Articles_model;
class Blogs extends BaseController{
    public function index(){
        $articles=new Articles_model();
        $data['article']=$articles->findAll();
        return view('blog',$data);

    }
}