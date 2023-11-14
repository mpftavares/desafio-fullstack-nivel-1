<?php

use App\Http\Controllers\TasksController;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('/tasks', TasksController::class);

Route::put('/tasks/{task}/toggle-complete', [TasksController::class, 'toggleComplete'])->name('tasks.toggle-complete');

Route::fallback(function () {
    return 'Route not found 🤷';
});


