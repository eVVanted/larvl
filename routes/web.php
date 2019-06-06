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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/page', function () {
    return view('page');
});

Route::get('/page/{id}/{cat}', function ($id, $cat) {
    echo $id.'-'.$cat ;
});

Route::get('/page/{id}', function ($id) {
    echo $id ;
})->where('id','[0-9]+');



Route::group(['prefix'=>'admin'], function(){

    Route::get('page/create', function () {
        return redirect()->route('article',['id'=>'45']);
//        return redirect()->route('home');
//        echo route('home');
//        echo 'page/create';
    });
    Route::get('page/edit', function () {
        echo 'page/edit';
    });
});

Route::get('/article/{id}', ['as' => 'article',function ($id) {
    echo $id;
}]);



