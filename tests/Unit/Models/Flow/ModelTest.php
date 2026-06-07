<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Matrix\Models\Flow;

use Playground\Matrix\Models\Flow;
use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Flow\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Flow::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'backlogs',
        'boards',
        'epics',
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
        'matrix',
        'note',
        'tag',
        'team',
    ];
}
