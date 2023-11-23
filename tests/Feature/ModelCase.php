<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Feature\GammaMatrix\Playground\Matrix;

use GammaMatrix\Playground\Test\Feature\Models\ModelCase as BaseModelCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use GammaMatrix\Playground\ServiceProvider as PlaygroundServiceProvider;
use GammaMatrix\Playground\Matrix\ServiceProvider;
use Illuminate\Contracts\Config\Repository;

/**
 * \Tests\Feature\GammaMatrix\Playground\Matrix\ModelCase
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
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        // dd([
        //     '__METHOD__' => __METHOD__,
        //     'path' => dirname(dirname(__DIR__)) . '/database/migrations',
        // ]);
        if (!empty(env('TEST_DB_MIGRATIONS'))) {
            // $this->loadLaravelMigrations();
            $this->loadMigrationsFrom(dirname(dirname(__DIR__)) . '/database/migrations-laravel');
            $this->loadMigrationsFrom(dirname(dirname(__DIR__)) . '/database/migrations');
        }
    }

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
