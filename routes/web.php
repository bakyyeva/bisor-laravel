<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Question\QuestionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
Route::get('question-add', [QuestionController::class, 'create'])->name('add')->middleware('auth');
Route::post('question-add', [QuestionController::class, 'store'])->middleware('auth');
Route::get('questions', [FrontController::class, 'questions'])->name('questions');
Route::get('questions/{question:id}', [FrontController::class, 'show'])->name('show');
Route::post('update-form', [QuestionController::class, 'viewUpdate'])->name('update-form');
Route::put('update', [QuestionController::class, 'update'])->name('update');
Route::post('delete', [QuestionController::class, 'delete'])->name('delete');
Route::post('answer', [QuestionController::class, 'answer'])->name('answer');

