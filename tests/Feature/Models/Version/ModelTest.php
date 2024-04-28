<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Matrix\Models\Version;

use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Version\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Version::class;

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
            'modelClass' => \Playground\Matrix\Models\Version::class,
        ],
        'matrix' => [
            'key' => 'matrix_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Matrix::class,
        ],
        'project' => [
            'key' => 'project_id',
            'rule' => 'create',
            'modelClass' => \Playground\Matrix\Models\Project::class,
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
    ];
}
