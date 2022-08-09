<?php

use App\Http\Controllers\HomeController;
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



Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/connect',[HomeController::class,'connect']);
Route::get('/vegetale',[HomeController::class,'vegetale']);
Route::get('/agriculture',[HomeController::class,'agriculture']);
Route::get('/agroalimentaire',[HomeController::class,'agroalimentaire']);
Route::get('/semenciere',[HomeController::class,'semenciere']);
Route::get('/show-sous-group/{id}',[HomeController::class,'showSousGroup'])->name('sousgroup.show');
Route::get('/show/{id}',[HomeController::class,'showDocuments']);
Route::get('/show-videos/{id}',[HomeController::class,'showVideos']);
Route::get('/show-cours/{id}',[HomeController::class,'showCours']);
Route::get('/show-images/{id}',[HomeController::class,'showImages']);
Route::get('/phpinfo', function() { return phpinfo();});






Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/animale',[HomeController::class,'animale']);
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



