<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TasksController;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Route;




Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::resource('auth', AuthController::class)->only(['create', 'store']);

Route::resource('auth', AuthController::class)->only(['create', 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::resource('/tasks', TasksController::class);

    Route::put('/tasks/{task}/toggle-complete', [TasksController::class, 'toggleComplete'])->name('tasks.toggle-complete');

    Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
    Route::delete('auth', [AuthController::class, 'destroy'])->name('auth.destroy');

});

Route::fallback(function () {
    return 'Route not found 🤷';
});
