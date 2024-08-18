<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Matrix\Models\Note;

use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Note\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Note::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<int, string> Test has many relationships.
     */
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

    /**
     * @var array<int, string> Test has one relationships.
     */
    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'matrix',
        'tag',
    ];
}
