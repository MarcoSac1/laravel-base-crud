<?php

use App\Http\Controllers\AnimalController;
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
    return view('app');
});

Route::get('/animals', [AnimalController::class,'index'])->name('pages.index');
Route::post('/animals', [AnimalController::class,'store'])->name('pages.store');

Route::get('/animals/create', [AnimalController::class,'create'])->name('pages.create');
Route::get('/animals/{animal}', [AnimalController::class,'show'])->name('pages.show');
Route::get('/animals/{animal}/edit', [AnimalController::class,'edit'])->name('pages.edit');
Route::put('/animals/{animal}', [AnimalController::class,'update'])->name('pages.update');
Route::delete('/animals/{animal}', [AnimalController::class,'destroy'])->name('pages.destroy');
