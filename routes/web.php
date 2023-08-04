<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\web\CreateUsersController;
use App\Http\Controllers\web\DeleteUsersController;
use App\Http\Controllers\web\ReadUsersController;
use App\Http\Controllers\web\UpdateUsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('auth')->group(function () {

    /**
     * rutas para el perfil admin
     */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    /**
     * rutas para los clientes
     */
    Route::get('/dashboard', [ReadUsersController::class, 'index'])->name('dashboard');
    Route::get('/clients', [CreateUsersController::class, 'index'])->name('clients');
    Route::post('/clients', [CreateUsersController::class, 'create'])->name('create');
    Route::get('/clients/destroy/{id}', [DeleteUsersController::class, 'destroy'])->name('destroy');

    Route::get('/clients/edit/{id}', [UpdateUsersController::class, 'index'])->name('edit');
    Route::post('/clients/update', [UpdateUsersController::class, 'update'])->name('update');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

});

require __DIR__ . '/auth.php';
