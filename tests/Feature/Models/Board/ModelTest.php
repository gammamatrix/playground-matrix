<?php
/**
 * Playground
 */
namespace Tests\Feature\Playground\Matrix\Models\Board;

use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Board\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Board::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Test\Models\User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Test\Models\User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Test\Models\User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Board::class,
        ],
        'backlog' => [
            'key' => 'backlog_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Backlog::class,
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
