<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\ToyKidController;

//Route::get('/', function () {return view('home');});
Route::get('/', [ToyKidController::class, 'home'])->name('santashome');

//toysroutes

Route::get('/elf/toys', [ToyController::class, 'index'])->name('toyshome');

Route::delete('/elf/toys/{id}', [ToyController::class, 'destroy'])->name('toysdestroy');

Route::get('/elf/toys/create', [ToyController::class, 'create'])->name('toyscreate');
Route::post('/elf/toys/store', [ToyController::class, 'store'])->name('toysstore');

Route::get('/elf/toys/edit/{id}', [ToyController::class, 'edit'])->name('toysedit');
Route::put('/elf/toys/{id}', [ToyController::class, 'update'])->name('toysupdate');

Route::get('/elf/toys/show/{id}',[ToyController::class, 'show'])->name('toysshow');

//kidsroutes

Route::get('/santa/kids', [KidController::class, 'index'])->name('kidshome');

Route::delete('/santa/kids/{id}', [KidController::class, 'destroy'])->name('kidsdestroy');

Route::get('/santa/kids/create', [KidController::class, 'create'])->name('kidscreate');
Route::post('/santa/kids/store', [KidController::class, 'store'])->name('kidsstore');

Route::get('/santa/kids/edit/{id}', [KidController::class, 'edit'])->name('kidsedit');
Route::put('/santa/kids/{id}', [KidController::class, 'update'])->name('kidsupdate');

Route::get('/santa/kids/show/{id}',[KidController::class, 'show'])->name('kidsshow');





//aboutUs

Route::get('/aboutUs', function(){ return view('aboutUs'); })->name('Aboutus');

Route::get('/santa/assignGifts', [ToyKidController::class, 'assignRandomGift'])->name('assignToys');
Route::get('/santa/gifts', [ToyKidController::class, 'index'])->name('kidsWithToys');

