<?php
/**
 * Playground
 */
namespace Playground\Matrix\Models;

use Playground\Models\Model;

/**
 * \Playground\Matrix\Models\Note
 */
class Note extends Model
{
    protected $table = 'matrix_notes';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'owned_by_id' => null,
        'parent_id' => null,
        'note_type' => null,
        'content' => '',
        'summary' => '',
        'status' => 1,
        'assets' => '{}',
        'backlog' => '{}',
        'board' => '{}',
        'flow' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'roadmap' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'note_type' => 'string',
        'gids' => 'integer',
        'po' => 'integer',
        'pg' => 'integer',
        'pw' => 'integer',
        'status' => 'integer',
        'rank' => 'integer',
        'size' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'start_at' => 'datetime',
        'planned_start_at' => 'datetime',
        'end_at' => 'datetime',
        'planned_end_at' => 'datetime',
        'canceled_at' => 'datetime',
        'closed_at' => 'datetime',
        'embargo_at' => 'datetime',
        'fixed_at' => 'datetime',
        'postponed_at' => 'datetime',
        'published_at' => 'datetime',
        'released_at' => 'datetime',
        'resumed_at' => 'datetime',
        'resolved_at' => 'datetime',
        'suspended_at' => 'datetime',
        'label' => 'string',
        'byline' => 'string',
        'slug' => 'string',
        'content' => 'string',
        'description' => 'string',
        'introduction' => 'string',
        'summary' => 'string',
        'url' => 'string',
        'ui' => 'array',
        'icon' => 'string',
        'image' => 'string',
        'avatar' => 'string',
        'active' => 'boolean',
        'canceled' => 'boolean',
        'closed' => 'boolean',
        'completed' => 'boolean',
        'duplicate' => 'boolean',
        'fixed' => 'boolean',
        'flagged' => 'boolean',
        'internal' => 'boolean',
        'locked' => 'boolean',
        'pending' => 'boolean',
        'planned' => 'boolean',
        'problem' => 'boolean',
        'published' => 'boolean',
        'released' => 'boolean',
        'retired' => 'boolean',
        'resolved' => 'boolean',
        'suspended' => 'boolean',
        'unknown' => 'boolean',
        'only_admin' => 'boolean',
        'only_user' => 'boolean',
        'only_guest' => 'boolean',
        'allow_public' => 'boolean',
        'assets' => 'array',
        'backlog' => 'string',
        'board' => 'string',
        'flow' => 'string',
        'meta' => 'array',
        'notes' => 'array',
        'options' => 'array',
        'roadmap' => 'array',
        'sources' => 'array',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'owned_by_id',
        'parent_id',
        'note_type',
        'gids',
        'po',
        'pg',
        'pw',
        'status',
        'rank',
        'size',
        'label',
        'byline',
        'slug',
        'content',
        'description',
        'introduction',
        'summary',
        'url',
        'active',
        'flagged',
        'internal',
        'locked',
        'pending',
        'planned',
        'problem',
        'published',
        'retired',
        'suspended',
        'unknown',
        'only_admin',
        'only_user',
        'only_guest',
        'allow_public',
        'ui',
        'icon',
        'image',
        'avatar',
        'start_at',
        'planned_start_at',
        'end_at',
        'planned_end_at',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'fixed_at',
        'postponed_at',
        'published_at',
        'released_at',
        'resolved_at',
        'resumed_at',
        'suspended_at',
        'assets',
        'backlog',
        'board',
        'flow',
        'meta',
        'notes',
        'options',
        'roadmap',
        'sources',
    ];
}
