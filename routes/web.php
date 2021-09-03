<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// student crud section starts here
Route::get('/Add/Student', [StudentController::class, 'Add_Student'])->name('student_add');
Route::post('/store/student', [StudentController::class, 'Store_Student'])->name('student_store');
Route::get('/view/student', [StudentController::class, 'View_Student'])->name('student_view');
Route::get('/view/all/student/{id}', [StudentController::class, 'View_All_Student'])->name('student_view_all');
Route::get('/edit/student/{id}', [StudentController::class, 'Edit_Student'])->name('student_edit');
Route::post('/update/student', [StudentController::class, 'Update_Student'])->name('student_update');
Route::get('/delete/student/{id}', [StudentController::class, 'Delete_Student'])->name('student_delete');
