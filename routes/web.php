<?php

use App\Product;
use App\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

/*
    $prod = new Product();
    $prod->nombre = 'isopos';
    $prod->slug = 'isopos';
    $prod->category_id = 3;
    $prod->descripcion_corta = 'isopos';
    $prod->descripcion_larga = 'isopos';
    $prod->especificaciones = 'isopos';
    $prod->datos_de_interes = 'isopos';
    $prod->estado = 'Nuevo';
    $prod->activo = 'Si';
    $prod->sliderprincipal = 'No'; 
    $prod->save();
    
    return $prod;*/

    //return view('welcome');


   /* $cat = Category::find(1)->products;
            return $cat;*/

  //  return view('tienda.index');
});

Route::get('/admin', function () {
    return view('plantilla.admin');
});

Route::resource('admin/category', 'Admin\AdminController')->names('admin.category');

/*Route::get('/admin', function () {
    return view('admin.category.create');//para llamar a categorias creadas o crear
});

Route::apiResource('category', 'API\CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/