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

Route::get('/', function () {
    return view('welcome');
});

Route::get('demo', function () {
    return view('demo');
});

Route::view('/demo1', 'demo1', ['name' => 'Taylor']);

Route::get('demo1/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('user/{name?}', function ($name = null) {
    return $name;
})->where('name','[?]');

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post: ' .$postId .'<br/>'. 'Comment: ' .$commentId;
});

Route::get('test/{title}', function ($title) {
    return $title;
})->where('title','.*');

Route::get('user/{id}/profile', function ($id) {
    //
})->name('profile');



Route::get('demo2', function() {
    return view('demo2');
});

use App\Http\Middleware\CheckAge;

Route::get('long', function () {
    return $age=222;
})->middleware(CheckAge::class);


//............Demo Demo...........//

Route::resource('/products', 'ProductController');

Route::get('home', function () {
    return view('home');
});

Route::get('call-view', function(){
    return view('master1');
 });
