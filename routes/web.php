<?php

use App\Models\Job;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;

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

Route::get('/', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/languages', [LanguageController::class, 'index'])->name('languages.index');
Route::get('/languages/{language}', [LanguageController::class, 'show'])->name('languages.show');


// get companies

Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
