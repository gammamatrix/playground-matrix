<?php

/**
 * Playground
 */

declare(strict_types=1);
namespace Playground\Matrix\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Playground\Models\Model;

/**
 * \Playground\Matrix\Models\Source
 *
 * @property string $id
 * @property ?string $source_type
 * @property ?scalar $created_by_id
 * @property ?scalar $modified_by_id
 * @property ?scalar $owned_by_id
 * @property ?string $parent_id
 * @property ?string $matrix_id
 * @property ?string $note_id
 * @property ?string $tag_id
 * @property ?string $team_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 * @property ?Carbon $deleted_at
 * @property ?Carbon $canceled_at
 * @property ?Carbon $closed_at
 * @property ?Carbon $embargo_at
 * @property ?Carbon $planned_end_at
 * @property ?Carbon $planned_start_at
 * @property ?Carbon $postponed_at
 * @property ?Carbon $published_at
 * @property ?Carbon $resolved_at
 * @property ?Carbon $resumed_at
 * @property ?Carbon $suspended_at
 * @property ?Carbon $timer_end_at
 * @property ?Carbon $timer_start_at
 * @property int $gids
 * @property int $po
 * @property int $pg
 * @property int $pw
 * @property bool $only_admin
 * @property bool $only_user
 * @property bool $only_guest
 * @property bool $allow_public
 * @property int $status
 * @property int $rank
 * @property int $size
 * @property ?array $matrix
 * @property ?int $x
 * @property ?int $y
 * @property ?int $z
 * @property ?float $r
 * @property ?float $theta
 * @property ?float $rho
 * @property ?float $phi
 * @property ?float $elevation
 * @property ?float $latitude
 * @property ?float $longitude
 * @property bool $active
 * @property bool $canceled
 * @property bool $closed
 * @property bool $completed
 * @property bool $cron
 * @property bool $featured
 * @property bool $flagged
 * @property bool $internal
 * @property bool $locked
 * @property bool $pending
 * @property bool $planned
 * @property bool $prioritized
 * @property bool $problem
 * @property bool $published
 * @property bool $released
 * @property bool $retired
 * @property bool $special
 * @property bool $suspended
 * @property bool $unknown
 * @property string $locale
 * @property string $label
 * @property string $title
 * @property string $byline
 * @property ?string $slug
 * @property string $url
 * @property string $description
 * @property string $introduction
 * @property ?string $content
 * @property ?string $summary
 * @property string $icon
 * @property string $image
 * @property string $avatar
 * @property ?array $ui
 * @property ?array $assets
 * @property ?array $meta
 * @property ?array $notes
 * @property ?array $options
 * @property ?array $sources
 */
class Source extends Model
{
    /** @use HasFactory<\Database\Factories\Playground\Matrix\Models\SourceFactory> */
    use HasFactory;

    protected $table = 'matrix_sources';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'source_type' => null,
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'matrix_id' => null,
        'note_id' => null,
        'tag_id' => null,
        'team_id' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'canceled_at' => null,
        'closed_at' => null,
        'embargo_at' => null,
        'planned_end_at' => null,
        'planned_start_at' => null,
        'postponed_at' => null,
        'published_at' => null,
        'resolved_at' => null,
        'resumed_at' => null,
        'suspended_at' => null,
        'timer_end_at' => null,
        'timer_start_at' => null,
        'gids' => 0,
        'po' => 0,
        'pg' => 0,
        'pw' => 0,
        'only_admin' => false,
        'only_user' => false,
        'only_guest' => false,
        'allow_public' => false,
        'status' => 0,
        'rank' => 0,
        'size' => 0,
        'matrix' => '{}',
        'x' => null,
        'y' => null,
        'z' => null,
        'r' => null,
        'theta' => null,
        'rho' => null,
        'phi' => null,
        'elevation' => null,
        'latitude' => null,
        'longitude' => null,
        'active' => true,
        'canceled' => false,
        'closed' => false,
        'completed' => false,
        'cron' => false,
        'featured' => false,
        'flagged' => false,
        'internal' => false,
        'locked' => false,
        'pending' => false,
        'planned' => false,
        'prioritized' => false,
        'problem' => false,
        'published' => false,
        'released' => false,
        'retired' => false,
        'special' => false,
        'suspended' => false,
        'unknown' => false,
        'locale' => '',
        'label' => '',
        'title' => '',
        'byline' => '',
        'slug' => null,
        'url' => '',
        'description' => '',
        'introduction' => '',
        'content' => null,
        'summary' => null,
        'icon' => '',
        'image' => '',
        'avatar' => '',
        'ui' => '{}',
        'assets' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'source_type',
        'owned_by_id',
        'parent_id',
        'matrix_id',
        'note_id',
        'tag_id',
        'team_id',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'planned_end_at',
        'planned_start_at',
        'postponed_at',
        'published_at',
        'resolved_at',
        'resumed_at',
        'suspended_at',
        'timer_end_at',
        'timer_start_at',
        'gids',
        'po',
        'pg',
        'pw',
        'only_admin',
        'only_user',
        'only_guest',
        'allow_public',
        'status',
        'rank',
        'size',
        'matrix',
        'x',
        'y',
        'z',
        'r',
        'theta',
        'rho',
        'phi',
        'elevation',
        'latitude',
        'longitude',
        'active',
        'canceled',
        'closed',
        'completed',
        'cron',
        'featured',
        'flagged',
        'internal',
        'locked',
        'pending',
        'planned',
        'prioritized',
        'problem',
        'published',
        'released',
        'retired',
        'special',
        'suspended',
        'unknown',
        'locale',
        'label',
        'title',
        'byline',
        'slug',
        'url',
        'description',
        'introduction',
        'content',
        'summary',
        'icon',
        'image',
        'avatar',
        'ui',
        'assets',
        'meta',
        'options',
        'sources',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'source_type' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'canceled_at' => 'datetime',
            'closed_at' => 'datetime',
            'embargo_at' => 'datetime',
            'planned_end_at' => 'datetime',
            'planned_start_at' => 'datetime',
            'postponed_at' => 'datetime',
            'published_at' => 'datetime',
            'resolved_at' => 'datetime',
            'resumed_at' => 'datetime',
            'suspended_at' => 'datetime',
            'timer_end_at' => 'datetime',
            'timer_start_at' => 'datetime',
            'gids' => 'integer',
            'po' => 'integer',
            'pg' => 'integer',
            'pw' => 'integer',
            'only_admin' => 'boolean',
            'only_user' => 'boolean',
            'only_guest' => 'boolean',
            'allow_public' => 'boolean',
            'status' => 'integer',
            'rank' => 'integer',
            'size' => 'integer',
            'matrix' => 'array',
            'x' => 'integer',
            'y' => 'integer',
            'z' => 'integer',
            'r' => 'float',
            'theta' => 'float',
            'rho' => 'float',
            'phi' => 'float',
            'elevation' => 'float',
            'latitude' => 'float',
            'longitude' => 'float',
            'active' => 'boolean',
            'canceled' => 'boolean',
            'closed' => 'boolean',
            'completed' => 'boolean',
            'cron' => 'boolean',
            'featured' => 'boolean',
            'flagged' => 'boolean',
            'internal' => 'boolean',
            'locked' => 'boolean',
            'pending' => 'boolean',
            'planned' => 'boolean',
            'prioritized' => 'boolean',
            'problem' => 'boolean',
            'published' => 'boolean',
            'released' => 'boolean',
            'retired' => 'boolean',
            'special' => 'boolean',
            'suspended' => 'boolean',
            'unknown' => 'boolean',
            'locale' => 'string',
            'label' => 'string',
            'title' => 'string',
            'byline' => 'string',
            'slug' => 'string',
            'url' => 'string',
            'description' => 'string',
            'introduction' => 'string',
            'content' => 'string',
            'summary' => 'string',
            'icon' => 'string',
            'image' => 'string',
            'avatar' => 'string',
            'ui' => 'array',
            'assets' => 'array',
            'meta' => 'array',
            'notes' => 'array',
            'options' => 'array',
            'sources' => 'array',
        ];
    }

    /**
     * The matrix of the source.
     *
     * @return HasOne<Matrix>
     */
    public function matrix(): HasOne
    {
        return $this->hasOne(
            Matrix::class,
            'id',
            'matrix_id'
        );
    }

    /**
     * The note of the source.
     *
     * @return HasOne<Note>
     */
    public function note(): HasOne
    {
        return $this->hasOne(
            Note::class,
            'id',
            'note_id'
        );
    }

    /**
     * The tag of the source.
     *
     * @return HasOne<Tag>
     */
    public function tag(): HasOne
    {
        return $this->hasOne(
            Tag::class,
            'id',
            'tag_id'
        );
    }

    /**
     * The team of the source.
     *
     * @return HasOne<Team>
     */
    public function team(): HasOne
    {
        return $this->hasOne(
            Team::class,
            'id',
            'team_id'
        );
    }

    /**
     * The backlogs of the source.
     *
     * @return HasMany<Backlog>
     */
    public function backlogs(): HasMany
    {
        return $this->hasMany(
            Backlog::class,
            'source_id',
            'id'
        );
    }

    /**
     * The boards of the source.
     *
     * @return HasMany<Board>
     */
    public function boards(): HasMany
    {
        return $this->hasMany(
            Board::class,
            'source_id',
            'id'
        );
    }

    /**
     * The epics of the source.
     *
     * @return HasMany<Epic>
     */
    public function epics(): HasMany
    {
        return $this->hasMany(
            Epic::class,
            'source_id',
            'id'
        );
    }

    /**
     * The milestones of the source.
     *
     * @return HasMany<Milestone>
     */
    public function milestones(): HasMany
    {
        return $this->hasMany(
            Milestone::class,
            'source_id',
            'id'
        );
    }

    /**
     * The projects of the source.
     *
     * @return HasMany<Project>
     */
    public function projects(): HasMany
    {
        return $this->hasMany(
            Project::class,
            'source_id',
            'id'
        );
    }

    /**
     * The releases of the source.
     *
     * @return HasMany<Release>
     */
    public function releases(): HasMany
    {
        return $this->hasMany(
            Release::class,
            'source_id',
            'id'
        );
    }

    /**
     * The roadmaps of the source.
     *
     * @return HasMany<Roadmap>
     */
    public function roadmaps(): HasMany
    {
        return $this->hasMany(
            Roadmap::class,
            'source_id',
            'id'
        );
    }

    /**
     * The sprints of the source.
     *
     * @return HasMany<Sprint>
     */
    public function sprints(): HasMany
    {
        return $this->hasMany(
            Sprint::class,
            'source_id',
            'id'
        );
    }

    /**
     * The teams of the source.
     *
     * @return HasMany<Team>
     */
    public function teams(): HasMany
    {
        return $this->hasMany(
            Team::class,
            'source_id',
            'id'
        );
    }

    /**
     * The tickets of the source.
     *
     * @return HasMany<Ticket>
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(
            Ticket::class,
            'source_id',
            'id'
        );
    }
}
