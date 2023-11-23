<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Feature\GammaMatrix\Playground\Matrix\Epic;

use Tests\Feature\GammaMatrix\Playground\Matrix\ModelCase;

/**
 * \Tests\Feature\GammaMatrix\Playground\Matrix\Epic\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \GammaMatrix\Playground\Matrix\Models\Epic::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key'        => 'created_by_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Test\Models\User::class,
        ],
        'modifier' => [
            'key'        => 'modified_by_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Test\Models\User::class,
        ],
        'owner' => [
            'key'        => 'owned_by_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Test\Models\User::class,
        ],
        'parent' => [
            'key'        => 'parent_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Epic::class,
        ],
        'board' => [
            'key'        => 'board_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Board::class,
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
        'team' => [
            'key'        => 'team_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Team::class,
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
