<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\InformasiController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\RumahDijualController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\TipeRumahController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\MessageConverter;
use Symfony\Component\Translation\MessageCatalogue;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');
Route::get('/detail/{id}', [DetailController::class, 'index'])
    ->name('detail');

Route::group(['middleware' => 'auth'], function() {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Resource router
        Route::resource('rumah-dijual', RumahDijualController::class);
        Route::resource('message', MessageController::class);
        Route::resource('tipe-rumah', TipeRumahController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('informasi', InformasiController::class);
        Route::resource('user', UserController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
