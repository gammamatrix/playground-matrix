<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Matrix\Models\Tag;

use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Tag\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Tag::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<string, array<string, mixed>> Test has many relationships.
     */
    protected array $hasMany = [
        'backlogs' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Backlog::class,
        ],
        'boards' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Board::class,
        ],
        'epics' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Epic::class,
        ],
        'milestones' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Milestone::class,
        ],
        'projects' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Project::class,
        ],
        'releases' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Release::class,
        ],
        'roadmaps' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Roadmap::class,
        ],
        'sprints' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Sprint::class,
        ],
        'teams' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Team::class,
        ],
        'tickets' => [
            'key' => 'tag_id',
            'modelClass' => \Playground\Matrix\Models\Ticket::class,
        ],
    ];

    /**
     * @var array<string, array<string, mixed>> Test has one relationships.
     */
    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Tag::class,
        ],
        'matrix' => [
            'key' => 'matrix_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Matrix::class,
        ],
    ];
}
