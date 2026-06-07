<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Matrix\Models\Tag;

use Playground\Matrix\Models\Backlog;
use Playground\Matrix\Models\Board;
use Playground\Matrix\Models\Epic;
use Playground\Matrix\Models\Matrix;
use Playground\Matrix\Models\Milestone;
use Playground\Matrix\Models\Project;
use Playground\Matrix\Models\Release;
use Playground\Matrix\Models\Roadmap;
use Playground\Matrix\Models\Sprint;
use Playground\Matrix\Models\Tag;
use Playground\Matrix\Models\Team;
use Playground\Matrix\Models\Ticket;
use Playground\Models\User;
use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Tag\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tag::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'backlogs' => [
            'key' => 'tag_id',
            'modelClass' => Backlog::class,
        ],
        'boards' => [
            'key' => 'tag_id',
            'modelClass' => Board::class,
        ],
        'epics' => [
            'key' => 'tag_id',
            'modelClass' => Epic::class,
        ],
        'milestones' => [
            'key' => 'tag_id',
            'modelClass' => Milestone::class,
        ],
        'projects' => [
            'key' => 'tag_id',
            'modelClass' => Project::class,
        ],
        'releases' => [
            'key' => 'tag_id',
            'modelClass' => Release::class,
        ],
        'roadmaps' => [
            'key' => 'tag_id',
            'modelClass' => Roadmap::class,
        ],
        'sprints' => [
            'key' => 'tag_id',
            'modelClass' => Sprint::class,
        ],
        'teams' => [
            'key' => 'tag_id',
            'modelClass' => Team::class,
        ],
        'tickets' => [
            'key' => 'tag_id',
            'modelClass' => Ticket::class,
        ],
    ];

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => Tag::class,
        ],
        'matrix' => [
            'key' => 'matrix_id',
            'rule' => 'create',
            'modelClass' => Matrix::class,
        ],
    ];
}
