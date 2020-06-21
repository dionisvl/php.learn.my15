<?php

use Games\Puzzle15\Http\Controllers\GameController;


Route::group(['middleware' => 'web'], function() {
    Route::get('/game', function () {
        return view('puzzle::welcome');
    });
    Route::get('/api/game/create', GameController::class . '@create');
});
