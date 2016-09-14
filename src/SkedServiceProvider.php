<?php

namespace CampusUnion;

use Auth;
use Illuminate\Support\ServiceProvider;

/**
 * Sked service provider for Laravel applications
 */
class SkedServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the configuration
     */
    public function boot()
    {
        $strSource = realpath(__DIR__ . '/../config/sked.php');
        if (class_exists('Illuminate\Foundation\Application', false))
            $this->publishes([$strSource => config_path('sked.php')]);
        $this->mergeConfigFrom($strSource, 'sked');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('sked', function ($app) {
            $aConfig = $app['config']->get('sked');

            // If the logged-in Laravel user has a timezone, use it!
            if (Auth::check() && Auth::user()->timezone_offset)
                $aConfig['data_connector']['options']['timezone_offset'] = Auth::user()->timezone_offset;

            return new Sked\Sked($aConfig);
        });
        $this->app->alias('sked', 'CampusUnion\Sked\Sked');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['sked', 'CampusUnion\Sked\Sked'];
    }

}
