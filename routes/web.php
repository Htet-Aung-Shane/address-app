<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FeedbackController;
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

Route::get('/original', function () {
    return view('welcome');
});


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[DataController::class, 'index']);
Route::get('autocomplete', [DataController::class, 'autocomplete'])->name('autocomplete');
Route::get('/search',[SearchController::class, 'search'])->name('search');
Route::post('/search',[SearchController::class, 'search'])->name('search');
Route::get('/feedback',function(){
    return view('feedback');
});
Route::get('feedback/action',[FeedbackController::class, 'bind']);
Route::post('feedback/action',[FeedbackController::class, 'bind']);
Route::get('/thanks',function(){
    return view('thanksyou');
})->name('thankyou');
