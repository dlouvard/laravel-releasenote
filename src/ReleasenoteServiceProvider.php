<?php
namespace Dlouvard\Releasenote;
/**
 * Created by PhpStorm.
 * User: dlouvard_imac
 * Date: 18/07/2017
 * Time: 10:54
 */
use Illuminate\Support\ServiceProvider;

class ReleasenoteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/migrations/' => base_path('/database/migrations')
        ], 'migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->mergeConfigFrom(__DIR__ . '/config/changelog.php', 'changelog');
        $this->app->singleton('Releasenote', function ($app) {
            return new \Dlouvard\Releasenote\Releasenote();
        });
    }
}