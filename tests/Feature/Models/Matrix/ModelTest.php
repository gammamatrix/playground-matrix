<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Matrix\Models\Matrix;

use Playground\Matrix\Models\Backlog;
use Playground\Matrix\Models\Board;
use Playground\Matrix\Models\Epic;
use Playground\Matrix\Models\Flow;
use Playground\Matrix\Models\Matrix;
use Playground\Matrix\Models\Milestone;
use Playground\Matrix\Models\Note;
use Playground\Matrix\Models\Project;
use Playground\Matrix\Models\Release;
use Playground\Matrix\Models\Roadmap;
use Playground\Matrix\Models\Source;
use Playground\Matrix\Models\Sprint;
use Playground\Matrix\Models\Team;
use Playground\Matrix\Models\Ticket;
use Playground\Matrix\Models\Version;
use Playground\Models\User;
use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Matrix\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Matrix::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'backlogs' => [
            'key' => 'matrix_id',
            'modelClass' => Backlog::class,
        ],
        'boards' => [
            'key' => 'matrix_id',
            'modelClass' => Board::class,
        ],
        'epics' => [
            'key' => 'matrix_id',
            'modelClass' => Epic::class,
        ],
        'flows' => [
            'key' => 'matrix_id',
            'modelClass' => Flow::class,
        ],
        'milestones' => [
            'key' => 'matrix_id',
            'modelClass' => Milestone::class,
        ],
        'notes' => [
            'key' => 'matrix_id',
            'modelClass' => Note::class,
        ],
        'projects' => [
            'key' => 'matrix_id',
            'modelClass' => Project::class,
        ],
        'releases' => [
            'key' => 'matrix_id',
            'modelClass' => Release::class,
        ],
        'roadmaps' => [
            'key' => 'matrix_id',
            'modelClass' => Roadmap::class,
        ],
        'sources' => [
            'key' => 'matrix_id',
            'modelClass' => Source::class,
        ],
        'sprints' => [
            'key' => 'matrix_id',
            'modelClass' => Sprint::class,
        ],
        'teams' => [
            'key' => 'matrix_id',
            'modelClass' => Team::class,
        ],
        'tickets' => [
            'key' => 'matrix_id',
            'modelClass' => Ticket::class,
        ],
        'versions' => [
            'key' => 'matrix_id',
            'modelClass' => Version::class,
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
            'modelClass' => Matrix::class,
        ],
    ];
}
