<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyProfilController;
use Illuminate\Support\Facades\Route;


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

//pratikum2
// Route::get('/', [PageController::class, 'index']); 

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']); 

// Route::get('/',[HomeController::class, '__invoke']);

// Route::get('/',[AboutController::class, '__invoke']);

// Route::get('/{id}',[ArticleController::class, '__invoke']);

//pratikum 3

Route::get('/home',[CompanyProfilController::class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/{id}', [CompanyProfilController::class, 'products']);

});

Route::get('/news/{id?}',[CompanyProfilController::class, 'news']);

Route::prefix('program')->group(function(){
    Route::get('/{id}', [CompanyProfilController::class, 'program']);

});

Route::get('/AboutUs',[CompanyProfilController::class, 'about']);

Route::resource('contactUs',CompanyProfilController::class);
