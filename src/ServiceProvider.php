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

            // Publish migrations
            $this->publishMigrations();

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

    /**
     * Register any application services.
     *
     * @return void
     */
    public function publishMigrations()
    {
        $migrations = [];

        foreach ([
            '2020_01_02_100001_create_matrix_backlogs_table.php',
            '2020_01_02_100001_create_matrix_boards_table.php',
            '2020_01_02_100001_create_matrix_epics_table.php',
            '2020_01_02_100001_create_matrix_flows_table.php',
            '2020_01_02_100001_create_matrix_milestones_table.php',
            '2020_01_02_100001_create_matrix_notes_table.php',
            '2020_01_02_100001_create_matrix_projects_table.php',
            '2020_01_02_100001_create_matrix_releases_table.php',
            '2020_01_02_100001_create_matrix_roadmaps_table.php',
            '2020_01_02_100001_create_matrix_sources_table.php',
            '2020_01_02_100001_create_matrix_sprints_table.php',
            '2020_01_02_100001_create_matrix_tags_table.php',
            '2020_01_02_100001_create_matrix_teams_table.php',
            '2020_01_02_100001_create_matrix_tickets_table.php',
            '2020_01_02_100001_create_matrix_versions_table.php',
        ] as $file) {
            $migrations[dirname(__DIR__).'/database/migrations/'.$file] = database_path('migrations/'.$file);
        }

        $this->publishes($migrations, 'playground-migrations');
    }


    public function about()
    {
        $config = config($this->package);

        $version = $this->version();

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
