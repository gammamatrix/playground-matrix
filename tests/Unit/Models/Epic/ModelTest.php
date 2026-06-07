<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Matrix\Models\Epic;

use Playground\Matrix\Models\Epic;
use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Epic\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Epic::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'backlogs',
        'boards',
        'milestones',
        'projects',
        'releases',
        'roadmaps',
        'sprints',
        'teams',
        'tickets',
    ];

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'backlog',
        'board',
        'flow',
        'matrix',
        'milestone',
        'note',
        'project',
        'release',
        'roadmap',
        'source',
        'sprint',
        'tag',
        'team',
        'ticket',
        'version',
    ];
}
