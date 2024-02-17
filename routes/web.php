<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::post('/registerUser',[UserController::class,'registerUser']);
Route::post('/loginUser',[UserController::class,'loginUser']);


Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '^(?!api).*$');
