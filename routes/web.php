<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/', [ButtonController::class, 'welcome'])->name('welcome');
Route::get('welcome', [ButtonController::class,'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('kancelaria', [ButtonController::class, 'kancelaria'])->name('kancelaria');
Route::get('kontakt', [ButtonController::class, 'kontakt'])->name('kontakt');
Route::get('farnost', [ButtonController::class, 'farnost'])->name('farnost');
Route::get('krst', [ButtonController::class, 'krst'])->name('krst');
Route::get('zmierenie', [ButtonController::class, 'zmierenie'])->name('zmierenie');
Route::get('manzelstvo', [ButtonController::class, 'manzelstvo'])->name('manzelstvo');
Route::get('pohreb', [ButtonController::class, 'pohreb'])->name('pohreb');
Route::get('prijimanie', [ButtonController::class, 'prijimanie'])->name('prijimanie');
Route::get('pomazanie', [ButtonController::class, 'pomazanie'])->name('pomazanie');
Route::get('sviatosti', [ButtonController::class, 'sviatosti'])->name('sviatosti');
Route::get('knazi', [ButtonController::class, 'knazi'])->name('knazi');
Route::get('oznamy', [ButtonController::class, 'oznamy'])->name('oznamy');
Route::get('oznamy2', [ButtonController::class, 'oznamy2'])->name('oznamy2');
Route::get('pridaj_aktualitu', [AdminController::class, 'pridajAktualitu'])->name('pridaj_aktualitu');
Route::post('potvrdAktualitu',[AdminController::class, 'potvrdAktualitu'])->middleware('auth');
Route::get('deleteActuality/{id}', [AdminController::class, 'zmazAktualitu'])->middleware('auth')->name('deleteActuality');
Route::get('pridaj_oznam', [AdminController::class, 'pridajOznam'])->middleware('auth')->name('pridaj_oznam');
Route::post('potvrdOznam', [AdminController::class, 'potvrdOznam'])->middleware('auth')->name('potvrdOznam');
Route::get('deleteAnnouncement/{id}', [AdminController::class, 'zmazOznam'])->middleware('auth')->name('deleteAnnouncement');
Route::get('pridaj_oznamypdf', [AdminController::class, 'pridajOznamyPdf'])->middleware('auth');
Route::post('potvrdOznamyPdf', [AdminController::class, 'potvrdOznamyPdf'])->middleware('auth');
Route::get('deleteAnnouncementPdf/{id}', [AdminController::class, 'zmazOznamPdf'])->middleware('auth');
require __DIR__.'/auth.php';
