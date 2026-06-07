<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Matrix\Models\Milestone;

use Playground\Matrix\Models\Milestone;
use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Milestone\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Milestone::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'backlogs',
        'boards',
        'epics',
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
        'epic',
        'flow',
        'matrix',
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
