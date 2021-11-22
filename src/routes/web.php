<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentDownloadController;
use App\Http\Controllers\DocumentSearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('documents/{document}/download', DocumentDownloadController::class)->name('documents.download');
    
    Route::post('documents/search', DocumentSearchController::class)->name('documents.search');

    Route::resource('documents', DocumentController::class);
});


require __DIR__.'/auth.php';
