<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

Route::prefix('auth')->group(function (){
    Route::get('login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('post.login');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('projects/{project}', [ProjectsController::class, 'show'])->name('projects.show');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [ProjectsController::class, 'index']);
    Route::resource('projects', ProjectsController::class)->except(['show', 'create', 'edit']);
});