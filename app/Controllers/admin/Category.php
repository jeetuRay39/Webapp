<?php namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\Categories_model;
class Category extends BaseController{
    public function list(){
        $categories=new Categories_model();
        $data['category']=$categories->findAll();

        
        return view('admin/category/list',$data);   

    }
    public function create(){
        return view('admin/category/create');
    }
    public function add(){
        $categories=new Categories_model();
        $file=$this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved()){ 
            $imgaeName=$file->getRandomName();
            $file->move('uploads/category/',$imgaeName);
        }
        $data=[
            'name'=>$this->request->getPost('name'),
            'image'=>$imgaeName,
        ];
        $categories->save($data);
        return redirect()->to('/categories');
    }
    public function edit($id=null){
        $categories=new Categories_model();
        $data['category']=$categories->find($id);
        return view('admin/category/edit',$data);
    }
    public function update($id=null){
        $categories=new Categories_model();
        $file=$this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved()){
            $imageName=$file->getRandomName();
            $file->move('uploads/category/',$imageName);
        }
        $data=[
            'name'=>$this->request->getPost('name'),
            'image'=>$imageName,
        ];
        $categories->update($id,$data);
        return redirect()->to('/categories');

    }
    public function delete($id=null){
        $categories=new Categories_model();
        $categories->delete($id);
        return redirect()->to('/categories');

    }
}