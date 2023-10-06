<?php namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\Articles_model;
use App\Models\Categories_model;
class Articles extends BaseController{
    public function list(){
        $articles=new Articles_model();
        $data['article']=$articles->findAll();
        return view('admin/articles/list.php',$data);
    }
    public function create(){
        $categories=new Categories_model();
        $data['category']=$categories->findAll();
        return view('admin/articles/create',$data);
    }
    public function add(){
        $articles=new Articles_model();
        $file=$this->request->getFile('image');
        if($file->isValid()&& !$file->hasMoved()){
            $imageName=$file->getRandomName();
            $file->move('uploads/articles/',$imageName);
        }
        $data=[
            'category'=>$this->request->getPost('category_id'),
            'title'=>$this->request->getPost('title'),
            'description'=>$this->request->getPost('description'),
            'image'=>$imageName,
            'author'=>$this->request->getPost('author'),


        ];
        $articles->save($data);
        return redirect()->to('/articles');
    }

    public function edit($id=null){
        $articles=new Articles_model();
        $categories=new Categories_model();
        $data['category']=$categories->findAll();
        $data['article']=$articles->find($id);
        return view('admin/articles/edit',$data);  
    }
    public function update($id=null){
        $articles=new Articles_model();
        $file=$this->request->getFile('image');
        if($file->isValid()&& !$file->hasMoved()){
            $imageName=$file->getRandomName();
            $file->move('uploads/articles/',$imageName);
        }
        $data =[
            'category'=>$this->request->getPost('category_id'),
            'title'=>$this->request->getPost('title'),
            'description'=>$this->request->getPost('description'),
            'image'=>$imageName,
            'author'=>$this->request->getPost('author'),


        ];
        $articles->update($id,$data);
        return redirect()->to('/articles');   

    }



    public function delete($id=null){
        $articles=new Articles_model();
        
        $articles->delete($id);
        
        return redirect()->to('/articles');

    }
}