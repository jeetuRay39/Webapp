<?php

namespace App\Controllers;
use App\Models\Articles_model;

class Home extends BaseController
{
    public function index(): string
    {
        
        $articles=new Articles_model();
        $data['article']=$articles->findAll();
        return view('Home',$data);
    }
}
