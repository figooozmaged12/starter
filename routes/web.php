<?php

//use App\Http\Controllers\Admin\SecondController;
//use App\Http\Controllers\TestController;
use App\Http\Controllers\Front\FirstController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index.blade.php', [MyController::class,'index']);
Route::get('contact.blade.php', [MyController::class,'contact']);
Route::get('services.blade.php', [MyController::class,'services']);
Route::get('about.blade.php', [MyController::class,'about']);


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
    ->middleware('verified');
