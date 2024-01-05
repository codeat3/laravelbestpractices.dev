<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\HomepageController;
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

use League\CommonMark\CommonMarkConverter;

Route::get('/', HomepageController::class)->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/docs/{repo?}/{version?}/{page?}', DocsController::class)->name('docs');
