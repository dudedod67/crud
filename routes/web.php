<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\KelasController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/about', function () {   
    return view('about', [
        "title" => "about",
        'nama' => 'Dude Nova Ariyanto',
        'kelas' => '11 PPLG 2',
        'foto' => 'img/duded.jpg', 
    ]);
});

Route::get('/students/all', [StudentsController::class, 'index']); 
Route::get('/student/detail/{student}', [StudentsController::class, 'show']);
Route::get('/student/create', [StudentsController::class, 'create']);
Route::post('/students/store', [StudentsController::class, 'store']);
Route::delete('/students/delete/{student}', [StudentsController::class, 'destroy']);
Route::get('/student/edit/{student}', [StudentsController::class, 'edit']);
Route::post('/student/update/{student}', [StudentsController::class, 'update']);
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
Route::delete('/kelas/delete/{kelas}', [KelasController::class, 'destroy']);

Route::group(["prefix" => "/auth"], function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::group(["prefix" => "/dashboard"], function(){
    Route::get('/main', [DashboardController::class, 'index'])->middleware(['auth']);
    Route::get('/student', [DashboardController::class, 'student'])->middleware(['auth']);
    Route::get('/kelas', [DashboardController::class, 'kelas'])->middleware(['auth']);
});

Route::get('/dashboard/detail/{student}', [DashboardController::class, 'showdashboard'])->name('dashboard.detail')->middleware('auth');
Route::get('/dashboard/create', [StudentsController::class, 'create'])->name('student.create')->middleware('auth');
Route::get('/dashboard/edit/{student}', [StudentsController::class, 'edit'])->name('student.edit')->middleware('auth');

