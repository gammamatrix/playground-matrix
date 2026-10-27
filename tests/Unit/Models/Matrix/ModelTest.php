<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Matrix\Models\Matrix;

use Playground\Matrix\Models\Matrix;
use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Matrix\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Matrix::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'backlogs',
        'boards',
        'epics',
        'flows',
        'milestones',
        'notes',
        'projects',
        'releases',
        'roadmaps',
        'sources',
        'sprints',
        'teams',
        'tickets',
        'versions',
    ];

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
