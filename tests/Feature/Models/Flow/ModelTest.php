<?php
/**
 * Playground
 */
namespace Tests\Feature\Playground\Matrix\Models\Flow;

use Tests\Feature\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Matrix\Models\Flow\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Flow::class;

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
            'modelClass' => \Playground\Matrix\Models\Flow::class,
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
