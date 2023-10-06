<?php namespace App\Models;
use CodeIgniter\Model;
class Articles_model extends Model{
    protected $table='articles';
    protected $primaykey='id';
    protected $allowedFields=['title','description','image','category','author'];
}