<?php   

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: get ('/About',[AboutController::class,'index'])->name('about');
Route::get('/home', [HomeController::class ,'index'] )->name('home');


