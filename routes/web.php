<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
    PageController
};

use App\Http\Livewire\{
    ShowEvents
};

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

Route::middleware('loggedin')->group(function() {
    Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'registerView'])->name('register-view');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function() {
    Route::get('/', [PageController::class, 'loadPage'])->name('dashboard');
    // Route::get('/events', ShowEvents::class)->name('events');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('page/{layout}/{theme}/{pageName}', [PageController::class, 'loadPage'])->name('page');
});

// Registrando um serviço de exemplo
// App::bind('LogExemplo', function($app) {
//     return "Log Registrado";
// });

// $exemplo = App::make('LogExemplo');

// dd($exemplo);
