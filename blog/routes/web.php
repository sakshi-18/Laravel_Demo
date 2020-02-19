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







Route::get('blogs',function(){

    $blogs = DB::table('create_blog')->get();

    return view('blogs.index',compact('blogs'));
});



Route::get('blogs/{id}', function ($id) {

    $blogs = DB::table('create_blog')->find($id);
    
    return view('blogs.show',compact('blogs'));
    
});

// Request handling logic will be done in app/http/controllers



// Route::get('document',function(){

//     $documents = App\Document::all();

//     return view('documents.index',compact('documents'));
// });

// Route::get('document/{document_id}',function($id){

//     $documents = App\Document::find($id);

//     return view('documents.show',compact('documents'));
// });

Route::get('/document','DocumentsController@index');
Route::get('/document/{id}','DocumentsController@show'); /*...Document*/



Route::get('/','PostController@index')->name('home');
Route::get('/post/create','PostController@create');
Route::post('/posts','PostController@store');
Route::get('/post/{post_id}','PostController@show');
Route::post('/post/{post}/comment','Com`mentController@store');

/*...Post*/

//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');


//Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
//Route::post('/login', 'Auth\LoginController@login');
Route::get('/login','SessionController@create');
Route::post('/login','SessionController@store');


//Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout','SessionController@destroy');


// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

?>


