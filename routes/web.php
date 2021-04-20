<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=>'admin'],function (){
	Route::get('/','AController@admin');
    Route::post('/','AController@postAdmin');
    Route::get('logout','AController@logout');
    //QL DANH MUC
    Route::get('/category/tim-kiem', 'CategoryController@search')->name('category.search');
    Route::resource('category', 'CategoryController');
    Route::get('category/{id}/delete','categoryController@destroy')->name('category.delete');
	//QL SAN PHAM
    Route::get('/product/tim-kiem', 'ProductController@search')->name('product.search');
    Route::resource('product', 'ProductController');
    Route::get('product/{id}/delete','productController@destroy')->name('product.delete');
    //QL USER
    Route::get('/user/tim-kiem', 'UserController@search')->name('user.search');
    Route::resource('user', 'UserController');
    Route::get('user/{id}/delete','UserController@destroy')->name('user.delete');
});

Route::get('/', 'CController@index')->name('index');
Route::get('signin', 'Ccontroller@signin')->name('signin');
Route::get('logout','CController@logout');
Route::get('profile', 'Ccontroller@profile')->name('profile');

Route::get('profile/creatProduct', 'ProductController@CPost')->name('creatProduct');





Route::post('signin','Ccontroller@postSignin');
Route::post('productPost','ProductController@CPost');   
