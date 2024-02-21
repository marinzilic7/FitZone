<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoachController;



Route::post('/registerUser',[UserController::class,'registerUser']);
Route::post('/loginUser',[UserController::class,'loginUser']);
Route::post('/logout',[UserController::class,'logout']);
Route::get('/isLogged',[UserController::class,'isLogged']);
Route::get('/getUserData',[UserController::class,'getUserData']);
Route::get('/getUsers',[UserController::class,'getUsers']);
Route::post('/deleteUser/{id}',[UserController::class,'deleteUser']);


Route::post('/addCoach',[CoachController::class,'addCoach']);
Route::get('/getCoaches',[CoachController::class,'getCoaches']);
Route::post('/deleteCoach/{id}',[CoachController::class,'deleteCoach']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '^(?!api).*$');
