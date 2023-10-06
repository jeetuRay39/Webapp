<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\admin\Dashboard;
use App\Controllers\admin\Login;
use App\Controllers\admin\Category;
use App\Controllers\admin\Articles;
use App\controllers\Blogs;



/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin',[Login::class,'loginpage']);  
$routes->get('/dashboard',[Dashboard::class,'index']);
$routes->get('/categories',[Category::class,'list']);
$routes->get('/categories/create',[Category::class,'create']);
$routes->post('/categories/add',[Category::class,'add']);
$routes->get('/categories/edit/(:num)',[Category::class,'edit/$1']);
$routes->post('/categories/update/(:num)',[Category::class,'update/$1']);
$routes->get('/categories/delete/(:num)',[Category::class,'delete/$1']);
$routes->get('/articles',[Articles::class,'list']);
$routes->get('/articles/create',[Articles::class,'create']);
$routes->post('/articles/add',[Articles::class,'add']);
$routes->get('/articles/delete/(:num)',[Articles::class,'delete/$1']);
$routes->get('/articles/edit/(:num)',[Articles::class,'edit/$1']);
$routes->post('/articles/update/(:num)',[Articles::class,'update/$1']);
$routes->get('/blogs',[Blogs::class,'index']);



