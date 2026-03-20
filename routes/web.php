<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitController;

Route::get('/', function () {
    return redirect()->route('habits.index');
});

Route::resource('habits', HabitController::class);
