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
 * \Tests\Feature\Playground\Matrix\Concerns\Creating\HandleTicketCodeTest
 */
#[CoversTrait(Creating::class)]
class HandleTicketCodeTest extends TestCase
{
    use Creating;

    public function test_handleTicketCode_with_ticket_and_empty_project_key_allowed(): void
    {
        config([
            'playground-matrix.keys.default' => '',
            'playground-matrix.keys.allow_empty' => true,
        ]);

        $project = Project::factory()->create([
            'key' => '',
        ]);

        $ticket = new Ticket([
            'project_id' => $project->id,
        ]);

        $this->handleTicketCode($ticket);

        $this->assertSame('', $project->key);
        $this->assertSame($ticket->key, $project->key);
    }

    public function test_handleTicketCode_with_ticket_and_empty_project_key_disabled(): void
    {
        config([
            'playground-matrix.keys.default' => '',
            'playground-matrix.keys.allow_empty' => false,
        ]);

        $project = Project::factory()->create([
            'key' => '',
        ]);

        $ticket = new Ticket([
            'project_id' => $project->id,
        ]);

        $this->handleTicketCode($ticket);

        $this->assertSame('', $project->key);
        $this->assertSame($ticket->key, $project->key);
    }

    public function test_handleTicketCode_with_ticket_and_empty_project_key_allowed_with_default_key(): void
    {
        config([
            'playground-matrix.keys.default' => 'ME',
            'playground-matrix.keys.allow_empty' => true,
        ]);

        $project = Project::factory()->create([
            'key' => '',
        ]);

        $ticket = new Ticket([
            'project_id' => $project->id,
        ]);

        $this->handleTicketCode($ticket);

        $this->assertSame('', $project->key);
        $this->assertSame($ticket->key, $project->key);
    }

    public function test_handleTicketCode_with_ticket_and_empty_project_key_disabled_with_default_key(): void
    {
        config([
            'playground-matrix.keys.default' => 'GH',
            'playground-matrix.keys.allow_empty' => false,
        ]);

        $project = Project::factory()->create([
            'key' => 'TEST',
        ]);

        $ticket = new Ticket([
            'project_id' => $project->id,
        ]);

        $this->handleTicketCode($ticket);

        $this->assertSame('TEST', $project->key);
        $this->assertSame($ticket->key, $project->key);
    }

    public function test_handleTicketCode_with_ticket_and_project_key(): void
    {
        config([
            'playground-matrix.keys.default' => '',
            'playground-matrix.keys.allow_empty' => true,
        ]);

        $project = Project::factory()->create([
            'key' => 'TEST',
        ]);

        $ticket = new Ticket([
            'project_id' => $project->id,
        ]);

        $this->handleTicketCode($ticket);

        $this->assertSame('TEST', $project->key);
        $this->assertSame($ticket->key, $project->key);
    }

    public function test_handleTicketCode_on_ticket_without_project(): void
    {
        $ticket = new Ticket;

        $this->handleTicketCode($ticket);

        $this->assertNull($ticket->key);
    }
}
