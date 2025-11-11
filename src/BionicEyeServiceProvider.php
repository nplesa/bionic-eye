<?php
namespace nplesa\BionicEye;

use Illuminate\Support\ServiceProvider;

class BionicEyeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bionic-eye');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function register()
    {
        //
    }
}
