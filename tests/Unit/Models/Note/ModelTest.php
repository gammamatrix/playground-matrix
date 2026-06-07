<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Matrix\Models\Note;

use Playground\Matrix\Models\Note;
use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Note\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Note::class;

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
        'tag',
    ];
}
