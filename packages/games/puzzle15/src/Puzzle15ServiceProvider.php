<?php

namespace Games\Puzzle15;


use Illuminate\Support\ServiceProvider;

class Puzzle15ServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'puzzle');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * @return void
     */
    public function register()
    {

    }
}
