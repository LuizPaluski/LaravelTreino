<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::delete("/supports/{id}", [SupportController::class,"destroy"])->name('supports.destroy');
Route::put('/supports/{id}', [SupportController::class,'update'])->name('supports.update');
route::get('/supports/{id}/edit', [SupportController::class,'edit'])->name(name: 'supports.edit');
route::get('/supports/create', [SupportController::class,'create'])->name('supports.create');
route::get('/supports/{id}', [SupportController::class,'show'])->name('supports.show');
route::get('/contato', [SiteController::class,'contact']);
route::get('/supports', [SupportController::class,'index'])->name('supports.index');
route::post('/supports', [SupportController::class,'store'])->name('supports.store');

