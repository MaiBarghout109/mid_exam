<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MidexamController ;
use App\Models\Midexam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('create', function () {
    return view('create_expenses');
});


Route::get('app', function () {
    return view('layout.app');
});


Route::get('expenses', function () {
    return view('expenses');
});



Route :: get('expenses' , [MidexamController::class, 'index']) ;
Route :: post('/store',[MidexamController::class , 'store']);
Route :: post('delete/{id}',[MidexamController::class,'delete']);
Route :: post('update/{id}',[MidexamController::class,'update']);
