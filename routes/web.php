<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('login');
});

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::name('user.')->group(function(){
    Route::get('/home', [PostController::class, 'get'])->middleware('auth')->name('home');
    Route::post('/home', [PostController::class, 'save'])->middleware('auth');

    Route::get('/pdf-export/{id}', [PostController::class, 'exportPdf'])->name('export'); 
    Route::get('/pdf-view/{id}', [PostController::class, 'viewPdf'])->name('view'); 

    Route::get('/', function(){
        if(Auth::check()){
            return redirect(route('user.home'));
        }
        return view('login');
    })->name('login');

    Route::post('/', [LoginController::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/register', function(){
        if(Auth::check()){
            return redirect(route('user.home'));
        }
        return view('register');
    })->name('register');

    Route::post('/register', [RegisterController::class, 'save']);
});