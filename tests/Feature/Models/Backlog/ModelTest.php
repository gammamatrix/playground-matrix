<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Feature\Playground\Matrix\Models\Backlog;

use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Backlog\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Backlog::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
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
        'ticket' => [
            'key' => 'ticket_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Ticket::class,
        ],
        'version' => [
            'key' => 'version_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Version::class,
        ],
    ];
}
