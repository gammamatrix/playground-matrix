<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Matrix\Concerns\Creating;

use PHPUnit\Framework\Attributes\CoversTrait;
use Playground\Matrix\Concerns\Creating;
use Playground\Matrix\Models\Project;
use Playground\Matrix\Models\Ticket;
use Tests\Feature\Playground\Matrix\TestCase;

/**
 * \Tests\Feature\Playground\Matrix\Concerns\Creating\GetProjectKeyTest
 */
#[CoversTrait(Creating::class)]
class GetProjectKeyTest extends TestCase
{
    use Creating;

    public function test_getProjectKey_with_ticket_and_empty_project_key_allowed(): void
    {
        config([
            'playground-matrix.keys.default' => '',
            'playground-matrix.keys.allow_empty' => true,
        ]);

        $project = Project::factory()->create([
            'key' => '',
        ]);

        $ticket = Ticket::factory()->make([
            'project_id' => $project->id,
        ]);

        $key = $this->getProjectKey($ticket);

        $this->assertSame('', $key);
    }

    public function test_getProjectKey_with_ticket_and_empty_project_key_disabled(): void
    {
        config([
            'playground-matrix.keys.default' => '',
            'playground-matrix.keys.allow_empty' => false,
        ]);

        $project = Project::factory()->create([
            'key' => '',
        ]);

        $ticket = Ticket::factory()->make([
            'project_id' => $project->id,
        ]);

        $key = $this->getProjectKey($ticket);

        $this->assertSame('', $key);
    }

    public function test_getProjectKey_with_ticket_and_empty_project_key_allowed_with_default_key(): void
    {
        config([
            'playground-matrix.keys.default' => 'ME',
            'playground-matrix.keys.allow_empty' => true,
        ]);

        $project = Project::factory()->create([
            'key' => '',
        ]);

        $ticket = Ticket::factory()->make([
            'project_id' => $project->id,
        ]);

        $key = $this->getProjectKey($ticket);

        $this->assertSame('', $key);
    }

    public function test_getProjectKey_with_ticket_and_empty_project_key_disabled_with_default_key(): void
    {
        config([
            'playground-matrix.keys.default' => 'GH',
            'playground-matrix.keys.allow_empty' => false,
        ]);

        $project = Project::factory()->create([
            'key' => 'TEST',
        ]);

        $ticket = Ticket::factory()->make([
            'project_id' => $project->id,
        ]);

        $key = $this->getProjectKey($ticket);

        $this->assertSame('TEST', $key);
    }

    public function test_getProjectKey_with_ticket_and_project_key(): void
    {
        config([
            'playground-matrix.keys.default' => '',
            'playground-matrix.keys.allow_empty' => true,
        ]);
        $project = Project::factory()->create([
            'key' => 'TEST',
        ]);

        $ticket = Ticket::factory()->make([
            'project_id' => $project->id,
        ]);

        $key = $this->getProjectKey($ticket);

        $this->assertSame('TEST', $key);
    }
}
