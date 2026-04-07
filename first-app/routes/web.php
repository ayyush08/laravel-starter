<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

//Route::view('/home','home'); // This is a shortcut for the above route definition. It directly returns the view without needing a callback function.

Route::get('/about/{id}',function($id){
    // echo "The id is: " . $id;
    return view('about',[
        'id' => $id
    ]);
});

//Redirection

// Route::redirect('/home', '/'); // This will redirect any request to /home to the root URL /. 

Route::get('/user',[User::class,'getUser']); // This route will call the getUser method of the User controller when the /user URL is accessed.

Route::get('/username/{username}',[User::class,'getUsername']); // This route will call the getUsername method of the User controller when the /username URL is accessed. The {username} is a route parameter that will be passed to the getUsername method.

Route::get('/admin',[User::class,'adminLogin']); // This route will call the adminLogin method of the User controller when the /admin URL is accessed.


Route::get('/user-home',[UserController::class,'userHome']); // This route will call the userHome method of the UserController when the /user-home URL is accessed.

Route::get('/user-about',[UserController::class,'userAbout']); 