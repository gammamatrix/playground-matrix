<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Feature\GammaMatrix\Playground\Matrix\Team;

use GammaMatrix\Playground\Test\Feature\App\Models\ModelCase;

/**
 * \Tests\Feature\GammaMatrix\Playground\Matrix\Team\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    public const MODEL = \GammaMatrix\Playground\Matrix\Models\Team::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key'        => 'created_by_id',
            'rule'       => 'first',
            'modelClass' => \App\Models\User::class,
        ],
        'modifier' => [
            'key'        => 'modified_by_id',
            'rule'       => 'first',
            'modelClass' => \App\Models\User::class,
        ],
        'owner' => [
            'key'        => 'owned_by_id',
            'rule'       => 'first',
            'modelClass' => \App\Models\User::class,
        ],
        'parent' => [
            'key'        => 'parent_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Team::class,
        ],
        'backlog' => [
            'key'        => 'backlog_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Backlog::class,
        ],
        'board' => [
            'key'        => 'board_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Board::class,
        ],
        'epic' => [
            'key'        => 'epic_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Epic::class,
        ],
        'flow' => [
            'key'        => 'flow_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Flow::class,
        ],
        'milestone' => [
            'key'        => 'milestone_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Milestone::class,
        ],
        'project' => [
            'key'        => 'project_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Project::class,
        ],
        'release' => [
            'key'        => 'release_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Release::class,
        ],
        'roadmap' => [
            'key'        => 'roadmap_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Roadmap::class,
        ],
        'source' => [
            'key'        => 'source_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Source::class,
        ],
        'sprint' => [
            'key'        => 'sprint_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Sprint::class,
        ],
        'tag' => [
            'key'        => 'tag_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Tag::class,
        ],
        'ticket' => [
            'key'        => 'ticket_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Ticket::class,
        ],
        'version' => [
            'key'        => 'version_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Version::class,
        ],
    ];
}
