<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userAuthController ;
use App\Http\Controllers\homeController ;
use App\Http\Controllers\shopController ;
use App\Http\Controllers\productsController ;

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
Route::view('/test','test');
Route::get('/',[homeController::class , 'index'])->name('home') ;
Route::controller(userAuthController::class)->group(function(){
    Route::get('/signup', 'signup')->name('signup') ;
    Route::post('/signup', 'postSignUp');
    Route::get('/login', 'getLogin')->name('login');
    Route::post('/login', 'postLogin')->name('login');
});



Route::view('/products','products');


Route::group(['middleware'=>'sessionCheck'], function(){
    Route::post('/logOut', [userAuthController::class ,'logOut'])->name('logout');
    Route::controller(productsController::class)->group(function(){
        Route::post('/shop','addProduct')->name('shop');
        Route::get('/shop','getAllProducts');
    });
});

Route::group(['middleware'=>'adminCheck'],function(){
    Route::get('/admin/addProduct',[productsController::class,'getAddProducts']);
});