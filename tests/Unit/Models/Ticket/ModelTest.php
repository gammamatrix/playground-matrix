<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Matrix\Models\Ticket;

use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Ticket\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Ticket::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'backlog',
        'board',
        'completedBy',
        'epic',
        'fixedBy',
        'flow',
        'matrix',
        'milestone',
        'note',
        'project',
        'release',
        'reportedBy',
        'roadmap',
        'source',
        'sprint',
        'tag',
        'team',
        'version',
    ];
}
