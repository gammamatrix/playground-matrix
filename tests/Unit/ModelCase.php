<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Unit\GammaMatrix\Playground\Matrix;

use GammaMatrix\Playground\Test\Unit\Models\ModelCase as BaseModelCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use GammaMatrix\Playground\ServiceProvider as PlaygroundServiceProvider;
use GammaMatrix\Playground\Matrix\ServiceProvider;
use Illuminate\Contracts\Config\Repository;

/**
 * \Tests\Unit\GammaMatrix\Playground\Matrix\ModelCase
 *
 */
class ModelCase extends BaseModelCase
{
    use DatabaseTransactions;

    protected function getPackageProviders($app)
    {
        return [
            PlaygroundServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    // /**
    //  * Define database migrations.
    //  *
    //  * @return void
    //  */
    // protected function defineDatabaseMigrations()
    // {
    //     // $this->loadLaravelMigrations(['--database' => 'testbench']);
    //     $this->loadMigrationsFrom(workbench_path('database/migrations'));
    // }

    /**
     * Set up the environment.
     *
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('auth.providers.users.model', 'GammaMatrix\\Playground\\Test\\Models\\User');
        $app['config']->set('playground.user', 'GammaMatrix\\Playground\\Test\\Models\\User');
        $app['config']->set('playground.auth.verify', 'user');

        $app['config']->set('playground-matrix.load.migrations', true);
    }
}
