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

Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);

Route::get('/about','FirstController@show');
Route::get('/about/{id}','FirstController@show1');

Route::get('/articles',['uses' => 'Admin\Core@getArticles', 'as' => 'articles']);
Route::get('/article/{page}',['uses' => 'Admin\Core@getArticle', 'as' => 'article'])->middleware('mymiddle');;


//list
//Route::resource('/pages','Admin\CoreResource');
//Route::get('pages/add', 'Admin\CoreResource@add'); // если хотим добавить свой метод
//Route::resource('/pages','Admin\CoreResource',['only' => ['index', 'show']]);
//Route::resource('/pages','Admin\CoreResource',['except' => ['index', 'show']]);

//Route::controller('/pages', 'PagesController'); // deprecated 5.3
//Route::resource('/pages', 'PagesController');





//Route::get('/page', function () {
//    return view('page');
//});
//
//Route::get('/page/{id}/{cat}', function ($id, $cat) {
//    echo $id.'-'.$cat ;
//});
//
//Route::get('/page/{id}', function ($id) {
//    echo $id ;
//})->where('id','[0-9]+');
//
//
//
//Route::group(['prefix'=>'admin'], function(){
//
//    Route::get('page/create', function () {
//        return redirect()->route('article',['id'=>'45']);
////        return redirect()->route('home');
////        echo route('home');
////        echo 'page/create';
//    });
//    Route::get('page/edit', function () {
//        echo 'page/edit';
//    });
//});
//
//Route::get('/article/{id}', ['as' => 'article',function ($id) {
//    echo $id;
//}]);



