<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Matrix\Models\Source;

use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Source\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Source::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'backlogs' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Backlog::class,
        ],
        'boards' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Board::class,
        ],
        'epics' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Epic::class,
        ],
        'milestones' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Milestone::class,
        ],
        'projects' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Project::class,
        ],
        'releases' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Release::class,
        ],
        'roadmaps' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Roadmap::class,
        ],
        'sprints' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Sprint::class,
        ],
        'teams' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Team::class,
        ],
        'tickets' => [
            'key' => 'source_id',
            'modelClass' => \Playground\Matrix\Models\Ticket::class,
        ],
    ];

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
            'modelClass' => \Playground\Matrix\Models\Source::class,
        ],
        'matrix' => [
            'key' => 'matrix_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Matrix::class,
        ],
        'note' => [
            'key' => 'note_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Note::class,
        ],
        'tag' => [
            'key' => 'tag_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Tag::class,
        ],
        'team' => [
            'key' => 'team_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Team::class,
        ],
    ];
}
