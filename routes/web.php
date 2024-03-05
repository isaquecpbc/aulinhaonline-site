<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;

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

Route::get('/', [SiteController::class, 'index']);
// sitemap
Route::get('/home', [SiteController::class, 'index'])->name('home');
Route::get('/sobre', [SiteController::class, 'about'])->name('about');
Route::get('/apoie', [SiteController::class, 'donate'])->name('donate');
Route::get('/contato', [SiteController::class, 'contact'])->name('contact');
Route::get('/cursos', [CourseController::class, 'index'])->name('courses');
Route::get('/inscreva', [EnrollmentController::class, 'index'])->name('enrollment');
Route::get('/inscreva/confirmado', [EnrollmentController::class, 'confirmation'])->name('enrollment.confirmation');
Route::resource('/enrollment', EnrollmentController::class);
