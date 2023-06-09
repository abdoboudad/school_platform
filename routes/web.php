<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

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
Route::get('admin3',[AdminController::class,'admin'])->name('admin');
Route::get('admin/languages',[LanguageController::class,'languages'])->name('admin.languages');
Route::get('admin/languages/courses/{id}',[LanguageController::class,'courses'])->name('admin.languages.courses');
Route::resource('admin/language/courses', CoursesController::class);


