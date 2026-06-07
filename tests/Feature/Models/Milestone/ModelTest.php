<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Matrix\Models\Milestone;

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
use Playground\Matrix\Models\Tag;
use Playground\Matrix\Models\Team;
use Playground\Matrix\Models\Ticket;
use Playground\Matrix\Models\Version;
use Playground\Models\User;
use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Milestone\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Milestone::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'backlogs' => [
            'key' => 'milestone_id',
            'modelClass' => Backlog::class,
        ],
        'boards' => [
            'key' => 'milestone_id',
            'modelClass' => Board::class,
        ],
        'epics' => [
            'key' => 'milestone_id',
            'modelClass' => Epic::class,
        ],
        'projects' => [
            'key' => 'milestone_id',
            'modelClass' => Project::class,
        ],
        'releases' => [
            'key' => 'milestone_id',
            'modelClass' => Release::class,
        ],
        'roadmaps' => [
            'key' => 'milestone_id',
            'modelClass' => Roadmap::class,
        ],
        'sprints' => [
            'key' => 'milestone_id',
            'modelClass' => Sprint::class,
        ],
        'teams' => [
            'key' => 'milestone_id',
            'modelClass' => Team::class,
        ],
        'tickets' => [
            'key' => 'milestone_id',
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
            'modelClass' => Milestone::class,
        ],
        'backlog' => [
            'key' => 'backlog_id',
            'rule' => 'create',
            'modelClass' => Backlog::class,
        ],
        'board' => [
            'key' => 'board_id',
            'rule' => 'create',
            'modelClass' => Board::class,
        ],
        'epic' => [
            'key' => 'epic_id',
            'rule' => 'create',
            'modelClass' => Epic::class,
        ],
        'flow' => [
            'key' => 'flow_id',
            'rule' => 'create',
            'modelClass' => Flow::class,
        ],
        'matrix' => [
            'key' => 'matrix_id',
            'rule' => 'create',
            'modelClass' => Matrix::class,
        ],
        'note' => [
            'key' => 'note_id',
            'rule' => 'create',
            'modelClass' => Note::class,
        ],
        'project' => [
            'key' => 'project_id',
            'rule' => 'create',
            'modelClass' => Project::class,
        ],
        'release' => [
            'key' => 'release_id',
            'rule' => 'create',
            'modelClass' => Release::class,
        ],
        'roadmap' => [
            'key' => 'roadmap_id',
            'rule' => 'create',
            'modelClass' => Roadmap::class,
        ],
        'source' => [
            'key' => 'source_id',
            'rule' => 'create',
            'modelClass' => Source::class,
        ],
        'sprint' => [
            'key' => 'sprint_id',
            'rule' => 'create',
            'modelClass' => Sprint::class,
        ],
        'tag' => [
            'key' => 'tag_id',
            'rule' => 'create',
            'modelClass' => Tag::class,
        ],
        'team' => [
            'key' => 'team_id',
            'rule' => 'create',
            'modelClass' => Team::class,
        ],
        'ticket' => [
            'key' => 'ticket_id',
            'rule' => 'create',
            'modelClass' => Ticket::class,
        ],
        'version' => [
            'key' => 'version_id',
            'rule' => 'create',
            'modelClass' => Version::class,
        ],
    ];
}
