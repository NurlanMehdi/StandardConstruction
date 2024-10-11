<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ContactController;
 
Route::get('/locale/{lang}',[LocaleController::class, 'setLocale']);

Route::get('/', [PageController::class, 'index'])->name('dashboard');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/service-detail/{id}', [PageController::class, 'serviceDetail'])->name('services.details');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/customers', [PageController::class, 'customers'])->name('customers');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/products', [PageController::class, 'products'])->name('products');

Route::post('/contact/message', [ContactController::class, 'send'])->name('contact.send');