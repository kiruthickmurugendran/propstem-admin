<?php

use App\Http\Controllers\Editcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\Userinnfocontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/properties', [PropertiesController::class, 'Read'])->name('Prop.Read');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/prop/create', [PropertiesController::class, 'create'])->name('prop.create');
    Route::post('prop/store', [PropertiesController::class,'store'])->name('prop.store');
    Route::get('prop/edit/{id}',[Editcontroller::class,'edit'])->name('prop.edit');
    Route::post('prop/update/{id}' ,[Editcontroller::class,'update'])->name('prop.update');

});

require __DIR__.'/auth.php';

