<?php
/**
 * GammaMatrix
 */

namespace GammaMatrix\Playground\Matrix;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider;

/**
 * \GammaMatrix\Playground\Matrix\ServiceProvider
 */
class ServiceProvider extends AuthServiceProvider
{
    public const VERSION = '73.0.0';

    public string $package = 'playground-matrix';

    /**
     * Bootstrap any package services.
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $config = config('playground-matrix');

        if (!empty($config) && $this->app->runningInConsole()) {
            // Publish configuration
            $this->publishes([
                dirname(__DIR__).'/config/playground-matrix.php'
                    => config_path('playground-matrix.php')
            ], 'playground-config');

            // Load migrations
            if (!empty($config['load'])
                && !empty($config['load']['migrations'])
            ) {
                $this->loadMigrationsFrom(dirname(__DIR__). '/database/migrations');
            }
        }

        $this->about();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/playground-matrix.php',
            'playground-matrix'
        );
    }

    public function about()
    {
        $config = config($this->package);

        $version = $this->version();

        $redirect = defined('\App\Providers\RouteServiceProvider::HOME') ? \App\Providers\RouteServiceProvider::HOME : null;

        AboutCommand::add('Playground Matrix', fn () => [
            '<fg=yellow;options=bold>Load</> Migrations' => !empty($config['load']['migrations']) ? '<fg=green;options=bold>ENABLED</>' : '<fg=yellow;options=bold>DISABLED</>',

            'Package' => $this->package,
            'Version' => $version,
        ]);
    }

    public function version()
    {
        return static::VERSION;
    }
}
