<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatifaController;

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

Route::get('/latifa',[LatifaController::class,'latifa'])->name('latifa');
Route::get('/Skin',[LatifaController::class,'Skin'])->name('Skin');
Route::get('/Doctor',[LatifaController::class,'Doctor'])->name('Doctor');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);


