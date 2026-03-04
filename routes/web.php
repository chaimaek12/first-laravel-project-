<?php   

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('students.create');
});
Route::view('/about', 'about');
Route :: get ('/About',[AboutController::class,'index'])->name('about');
Route::get('/home', [HomeController::class ,'index'] )->name('home');
Route::get('/add-student', [StudentController::class, 'store']);
  

Route::get('/register', [StudentController::class, 'create']);
Route::post('/register', [StudentController::class, 'store']);
