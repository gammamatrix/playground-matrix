<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Matrix\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Playground\Test\Feature\Models\ModelCase as BaseModelCase;
use Tests\Unit\Playground\Matrix\PackageProviders;

/**
 * \Tests\Feature\Playground\Matrix\Models\ModelCase
 */
class ModelCase extends BaseModelCase
{
    use DatabaseTransactions;
    use PackageProviders;

    protected bool $hasMigrations = true;

    protected bool $load_migrations_laravel = false;

    protected bool $load_migrations_package = true;

    protected bool $load_migrations_playground = true;

    protected bool $setUpUserForPlayground = true;
}
