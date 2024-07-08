<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Matrix\Console\Commands\About;

use PHPUnit\Framework\Attributes\CoversClass;
use Playground\Matrix\ServiceProvider;
use Tests\Feature\Playground\Matrix\TestCase;

/**
 * \Tests\Feature\Playground\Matrix\Console\Commands\About\CommandTest
 */
#[CoversClass(ServiceProvider::class)]
class CommandTest extends TestCase
{
    public function test_command_about_displays_package_information_and_succeed_with_code_0(): void
    {
        config([
            'playground-matrix.load.migrations' => true,
        ]);

        /**
         * @var \Illuminate\Testing\PendingCommand $result
         */
        $result = $this->artisan('about');
        $result->assertExitCode(0);
        $result->expectsOutputToContain('Playground: Matrix');
    }
}
