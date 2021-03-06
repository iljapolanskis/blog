<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('post');

Route::get('apartments', [ApartmentsController::class, 'index'])->name('apartments');
Route::get('apartments/{apartment}', [ApartmentsController::class, 'show'])->name('apartment');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
