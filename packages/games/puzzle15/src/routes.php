<?php

use Games\Puzzle15\Http\Controllers\GameController;


Route::group(['middleware' => 'web'], function() {

    Route::get('/game', GameController::class . '@index');


    Route::get('/game/create', GameController::class . '@create');

    Route::get('/game/store', GameController::class . '@store')->name('game.store');
    Route::get('/game/start', GameController::class . '@show')->name('game.show');
});
