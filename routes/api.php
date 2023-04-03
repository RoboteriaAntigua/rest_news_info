<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::controller(NewsController::class)->group(function(){
    Route::get('News', 'index')             ->name('News');
    Route::get('News/{id}','show')          ->name('News.show');
});



//Sin seguridad!
/*
Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('logout',[AuthController::class,'logout']);
    Route::post('register',[AuthController::class,'register']);
    Route::post('login',[AuthController::class,'login']);

});
*/
