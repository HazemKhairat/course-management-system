<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Auth\UserController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('users/')->name('user.')->group(function () {
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::get('show/{id}', [UserController::class, 'show'])->name('show');
    Route::post('update/{id}', [UserController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('changePassword', [UserController::class, 'changePassword'])->name('changePassword');
    Route::get('instractor_round/{id}', [UserController::class, 'instractor_round'])->name('instractor_round');

});

Route::prefix('students/')->name('student.')->group(function () {
    Route::get('index', [StudentController::class, 'index'])->name('index');
    Route::get('create', [StudentController::class, 'create'])->name('create');
    Route::post('store', [StudentController::class, 'store'])->name('store');
    Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::get('show/{id}', [StudentController::class, 'show'])->name('show');
    Route::post('update/{id}', [StudentController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');
    Route::get('profile', [StudentController::class, 'profile'])->name('profile');
    Route::post('changePassword', [StudentController::class, 'changePassword'])->name('changePassword');
    Route::get('instractor_round/{id}', [StudentController::class, 'instractor_round'])->name('instractor_round');

});

Route::prefix('course/')->name('course.')->group(function () {
    Route::get('index', [CourseController::class, 'index'])->name('index');
    Route::get('create', [CourseController::class, 'create'])->name('create');
    Route::post('store', [CourseController::class, 'store'])->name('store');
    Route::get('edit/{id}', [CourseController::class, 'edit'])->name('edit');
    Route::get('show/{id}', [CourseController::class, 'show'])->name('show');
    Route::post('update/{id}', [CourseController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [CourseController::class, 'destroy'])->name('destroy');
});

Route::prefix('round/')->name('round.')->group(function () {
    Route::get('index', [RoundController::class, 'index'])->name('index');
    Route::get('create', [RoundController::class, 'create'])->name('create');
    Route::post('store', [RoundController::class, 'store'])->name('store');
    Route::get('edit/{id}', [RoundController::class, 'edit'])->name('edit');
    Route::get('show/{id}', [RoundController::class, 'show'])->name('show');
    Route::post('update/{id}', [RoundController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [RoundController::class, 'destroy'])->name('destroy');
});

Route::prefix('project/')->name('project.')->group(function () {
    Route::get('index', [ProjectController::class, 'index'])->name('index');
    Route::get('create', [ProjectController::class, 'create'])->name('create');
    Route::post('store', [ProjectController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ProjectController::class, 'edit'])->name('edit');
    Route::get('show/{id}', [ProjectController::class, 'show'])->name('show');
    Route::post('update/{id}', [ProjectController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [ProjectController::class, 'destroy'])->name('destroy');
});

Route::prefix('reply/')->name('reply.')->group(function () {
    Route::get('index', [ReplyController::class, 'index'])->name('index');
    Route::get('create/{project_id}', [ReplyController::class, 'create'])->name('create');
    Route::post('store/{project_id}', [ReplyController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ReplyController::class, 'edit'])->name('edit');
    Route::get('show/{id}', [ReplyController::class, 'show'])->name('show');
    Route::post('update/{id}', [ReplyController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [ReplyController::class, 'destroy'])->name('destroy');
});