<?php

use App\Http\Controllers\PoliceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::prefix('polices')->group(function () {
    Route::get('/',  [PoliceController::class , 'index'])->name("polices");
    Route::get('/ajouter', function () {
        return view('polices.ajouter');
    })->name("ajouter");
    Route::post('/ajouter', [PoliceController::class , 'store'])->name("store");
     // Route to display the edit form for a specific police
     Route::get('/{id}/edit', [PoliceController::class, 'edit'])->name('police.edit');

     // Route to update the police record
     Route::put('/{id}', [PoliceController::class, 'update'])->name('police.update');

     // Route to delete a specific police
     Route::delete('/{id}', [PoliceController::class, 'destroy'])->name('police.destroy');

});
