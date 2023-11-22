<?php

use App\Http\Controllers\Chat\GroupController;
use App\Http\Controllers\Chat\PrivateController;
use Illuminate\Support\Facades\Auth;
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
    if (auth()->guard()) {
        return to_route('login');
    }
    return to_route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('chat/private', [PrivateController::class, 'index'])->name('chat.private');
    Route::get('chat/group', [GroupController::class, 'index'])->name('chat.group');
});
