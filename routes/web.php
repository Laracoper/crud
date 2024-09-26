<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::post('/contact/submit', [MainController::class, 'contactSubmit'])->name('contact-form');

Route::get('/contact/all', [MainController::class, 'contactall'])->name('contactall');

Route::get('/contact/all/{id}', [MainController::class, 'contactallid'])->name('contactallid');

Route::get('/contact/all/{id}/update', [MainController::class, 'updateid'])->name('updateid');

Route::get('/contact/all/{id}/delete', [MainController::class, 'deleteid'])->name('deleteid');

Route::post('/contact/all/{id}/update', [MainController::class, 'updateidsubmit'])->name('updateidsubmit');
