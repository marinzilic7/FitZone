<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::post('/registerUser',[UserController::class,'registerUser']);
Route::post('/loginUser',[UserController::class,'loginUser']);
Route::post('/logout',[UserController::class,'logout']);
Route::get('/isLogged',[UserController::class,'isLogged']);

Route::get('/getUserData',[UserController::class,'getUserData']);


Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '^(?!api).*$');
