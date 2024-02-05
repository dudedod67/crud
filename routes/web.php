<?php

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
        'nama' => 'Davin Kafila Haidar',
        'kelas' => '11 PPLG 2',
        'foto' => 'img/davin.jpg', 
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



