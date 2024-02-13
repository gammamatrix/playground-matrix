<?php
/**
 * Playground
 */
namespace Tests\Unit\Playground\Matrix\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Playground\Matrix\ServiceProvider;
use Playground\ServiceProvider as PlaygroundServiceProvider;
use Playground\Test\Unit\Models\ModelCase as BaseModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\ModelCase
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
        $app['config']->set('auth.providers.users.model', 'Playground\\Test\\Models\\User');
        $app['config']->set('playground.user', 'Playground\\Test\\Models\\User');
        $app['config']->set('playground.auth.verify', 'user');

        $app['config']->set('playground-matrix.load.migrations', true);
    }
}
