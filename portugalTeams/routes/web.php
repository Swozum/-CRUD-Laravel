<?php

use Illuminate\Support\Facades\URL;
URL::forceScheme('https');
use App\Http\Controllers\TeamController;

Route::get('/', TeamController::class .'@index')->name('teams.index');
Route::get('/teams/create', TeamController::class . '@create')->name('teams.create');
Route::post('/teams', TeamController::class . '@store')->name('teams.store');
Route::get('/teams/{team}', TeamController::class . '@show')->name('teams.show');
Route::get('/teams/{team}/edit', TeamController::class . '@edit')->name('teams.edit');
Route::put('/teams/{team}', TeamController::class . '@update')->name('teams.update');
Route::delete('/teams/{team}', TeamController::class . '@destroy')->name('teams.destroy');
