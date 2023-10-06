<?php namespace App\Models;
use CodeIgniter\Model;
class Admin_model extends Model{
    
        protected $table = 'admins';
        protected $primarykey ='id';
        protected $allowedFields=['username','password','status','created_at'];



   

}