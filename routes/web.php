<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userAuthController ;
use App\Http\Controllers\homeController ;

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
Route::get('/signup',[userAuthController::class , 'signup'])->name('signup') ;
Route::get('/home',[homeController::class , 'index'])->name('home') ;
Route::post('/signup',[userAuthController::class , 'postSignUp']);
Route::get('/login',[userAuthController::class , 'getLogin'])->name('login');
Route::post('/login',[userAuthController::class , 'postLogin'])->name('login');
Route::view('/products','products');

Route::group(['middleware'=>'sessionCheck'], function(){
    Route::post('/logOut', [userAuthController::class ,'logOut'])->name('logout');
});