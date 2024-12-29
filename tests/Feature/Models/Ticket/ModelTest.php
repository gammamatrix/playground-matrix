<?php

/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Matrix\Models\Ticket;

use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Ticket\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Ticket::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<string, array<string, mixed>> Test has many relationships.
     */
    protected array $hasMany = [
        'backlogs' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Backlog::class,
        ],
        'boards' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Board::class,
        ],
        'epics' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Epic::class,
        ],
        'milestones' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Milestone::class,
        ],
        'projects' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Project::class,
        ],
        'releases' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Release::class,
        ],
        'roadmaps' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Roadmap::class,
        ],
        'sprints' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Sprint::class,
        ],
        'teams' => [
            'key' => 'ticket_id',
            'modelClass' => \Playground\Matrix\Models\Team::class,
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
            'modelClass' => \Playground\Matrix\Models\Ticket::class,
        ],
        'backlog' => [
            'key' => 'backlog_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Backlog::class,
        ],
        'board' => [
            'key' => 'board_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Board::class,
        ],
        'epic' => [
            'key' => 'epic_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Epic::class,
        ],
        'flow' => [
            'key' => 'flow_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Flow::class,
        ],
        'matrix' => [
            'key' => 'matrix_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Matrix::class,
        ],
        'milestone' => [
            'key' => 'milestone_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Milestone::class,
        ],
        'note' => [
            'key' => 'note_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Note::class,
        ],
        'project' => [
            'key' => 'project_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Project::class,
        ],
        'release' => [
            'key' => 'release_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Release::class,
        ],
        'roadmap' => [
            'key' => 'roadmap_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Roadmap::class,
        ],
        'source' => [
            'key' => 'source_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Source::class,
        ],
        'sprint' => [
            'key' => 'sprint_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Sprint::class,
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
        'version' => [
            'key' => 'version_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Version::class,
        ],
        'completedBy' => [
            'key' => 'completed_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
        'fixedBy' => [
            'key' => 'fixed_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
        'reportedBy' => [
            'key' => 'reported_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
    ];
}
