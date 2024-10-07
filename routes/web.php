<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index' , function () {
//     return view('index');
// });
// Route::get('/teams', [TeamsController::class, 'index']);

Route::delete('/teams/{team}', [TeamsController::class, 'destroy']);

Route::resource('teams', TeamsController::class);
