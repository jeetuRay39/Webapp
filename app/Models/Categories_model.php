<?php namespace App\Models;
use CodeIgniter\Model;
class Categories_model extends Model{
    protected $table='categories';
    protected $primaykey='id';
    protected $allowedFields=['name','image'];  
}