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
 * \Playground\Matrix\Models\Backlog
 *
 * @property string $id
 * @property ?string $backlog_type
 * @property ?scalar $created_by_id
 * @property ?scalar $modified_by_id
 * @property ?scalar $owned_by_id
 * @property ?string $parent_id
 * @property ?string $board_id
 * @property ?string $epic_id
 * @property ?string $flow_id
 * @property ?string $matrix_id
 * @property ?string $milestone_id
 * @property ?string $note_id
 * @property ?string $project_id
 * @property ?string $release_id
 * @property ?string $roadmap_id
 * @property ?string $source_id
 * @property ?string $sprint_id
 * @property ?string $tag_id
 * @property ?string $team_id
 * @property ?string $ticket_id
 * @property ?string $version_id
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
 * @property ?array $backlog
 * @property ?array $board
 * @property ?array $flow
 * @property ?array $history
 * @property ?array $meta
 * @property ?array $notes
 * @property ?array $options
 * @property ?array $roadmap
 * @property ?array $sources
 */
class Backlog extends Model
{
    /** @use HasFactory<\Database\Factories\Playground\Matrix\Models\BacklogFactory> */
    use HasFactory;

    protected $table = 'matrix_backlogs';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'backlog_type' => null,
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'board_id' => null,
        'epic_id' => null,
        'flow_id' => null,
        'matrix_id' => null,
        'milestone_id' => null,
        'note_id' => null,
        'project_id' => null,
        'release_id' => null,
        'roadmap_id' => null,
        'source_id' => null,
        'sprint_id' => null,
        'tag_id' => null,
        'team_id' => null,
        'ticket_id' => null,
        'version_id' => null,
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
        'backlog' => '{}',
        'board' => '{}',
        'flow' => '{}',
        'history' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'roadmap' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'backlog_type',
        'owned_by_id',
        'parent_id',
        'board_id',
        'epic_id',
        'flow_id',
        'matrix_id',
        'milestone_id',
        'note_id',
        'project_id',
        'release_id',
        'roadmap_id',
        'source_id',
        'sprint_id',
        'tag_id',
        'team_id',
        'ticket_id',
        'version_id',
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
        'backlog',
        'board',
        'flow',
        'history',
        'meta',
        'options',
        'roadmap',
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
            'backlog_type' => 'string',
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
            'backlog' => 'array',
            'board' => 'array',
            'flow' => 'array',
            'history' => 'array',
            'meta' => 'array',
            'notes' => 'array',
            'options' => 'array',
            'roadmap' => 'array',
            'sources' => 'array',
        ];
    }

    /**
     * The board of the backlog.
     *
     * @return HasOne<Board, $this>
     */
    public function board(): HasOne
    {
        return $this->hasOne(
            Board::class,
            'id',
            'board_id'
        );
    }

    /**
     * The epic of the backlog.
     *
     * @return HasOne<Epic, $this>
     */
    public function epic(): HasOne
    {
        return $this->hasOne(
            Epic::class,
            'id',
            'epic_id'
        );
    }

    /**
     * The flow of the backlog.
     *
     * @return HasOne<Flow, $this>
     */
    public function flow(): HasOne
    {
        return $this->hasOne(
            Flow::class,
            'id',
            'flow_id'
        );
    }

    /**
     * The matrix of the backlog.
     *
     * @return HasOne<Matrix, $this>
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
     * The milestone of the backlog.
     *
     * @return HasOne<Milestone, $this>
     */
    public function milestone(): HasOne
    {
        return $this->hasOne(
            Milestone::class,
            'id',
            'milestone_id'
        );
    }

    /**
     * The note of the backlog.
     *
     * @return HasOne<Note, $this>
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
     * The project of the backlog.
     *
     * @return HasOne<Project, $this>
     */
    public function project(): HasOne
    {
        return $this->hasOne(
            Project::class,
            'id',
            'project_id'
        );
    }

    /**
     * The release of the backlog.
     *
     * @return HasOne<Release, $this>
     */
    public function release(): HasOne
    {
        return $this->hasOne(
            Release::class,
            'id',
            'release_id'
        );
    }

    /**
     * The roadmap of the backlog.
     *
     * @return HasOne<Roadmap, $this>
     */
    public function roadmap(): HasOne
    {
        return $this->hasOne(
            Roadmap::class,
            'id',
            'roadmap_id'
        );
    }

    /**
     * The source of the backlog.
     *
     * @return HasOne<Source, $this>
     */
    public function source(): HasOne
    {
        return $this->hasOne(
            Source::class,
            'id',
            'source_id'
        );
    }

    /**
     * The sprint of the backlog.
     *
     * @return HasOne<Sprint, $this>
     */
    public function sprint(): HasOne
    {
        return $this->hasOne(
            Sprint::class,
            'id',
            'sprint_id'
        );
    }

    /**
     * The tag of the backlog.
     *
     * @return HasOne<Tag, $this>
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
     * The team of the backlog.
     *
     * @return HasOne<Team, $this>
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
     * The ticket of the backlog.
     *
     * @return HasOne<Ticket, $this>
     */
    public function ticket(): HasOne
    {
        return $this->hasOne(
            Ticket::class,
            'id',
            'ticket_id'
        );
    }

    /**
     * The version of the backlog.
     *
     * @return HasOne<Version, $this>
     */
    public function version(): HasOne
    {
        return $this->hasOne(
            Version::class,
            'id',
            'version_id'
        );
    }

    /**
     * The boards of the backlog.
     *
     * @return HasMany<Board, $this>
     */
    public function boards(): HasMany
    {
        return $this->hasMany(
            Board::class,
            'backlog_id',
            'id'
        );
    }

    /**
     * The epics of the backlog.
     *
     * @return HasMany<Epic, $this>
     */
    public function epics(): HasMany
    {
        return $this->hasMany(
            Epic::class,
            'backlog_id',
            'id'
        );
    }

    /**
     * The milestones of the backlog.
     *
     * @return HasMany<Milestone, $this>
     */
    public function milestones(): HasMany
    {
        return $this->hasMany(
            Milestone::class,
            'backlog_id',
            'id'
        );
    }

    /**
     * The projects of the backlog.
     *
     * @return HasMany<Project, $this>
     */
    public function projects(): HasMany
    {
        return $this->hasMany(
            Project::class,
            'backlog_id',
            'id'
        );
    }

    /**
     * The releases of the backlog.
     *
     * @return HasMany<Release, $this>
     */
    public function releases(): HasMany
    {
        return $this->hasMany(
            Release::class,
            'backlog_id',
            'id'
        );
    }

    /**
     * The roadmaps of the backlog.
     *
     * @return HasMany<Roadmap, $this>
     */
    public function roadmaps(): HasMany
    {
        return $this->hasMany(
            Roadmap::class,
            'backlog_id',
            'id'
        );
    }

    /**
     * The sprints of the backlog.
     *
     * @return HasMany<Sprint, $this>
     */
    public function sprints(): HasMany
    {
        return $this->hasMany(
            Sprint::class,
            'backlog_id',
            'id'
        );
    }

    /**
     * The teams of the backlog.
     *
     * @return HasMany<Team, $this>
     */
    public function teams(): HasMany
    {
        return $this->hasMany(
            Team::class,
            'backlog_id',
            'id'
        );
    }

    /**
     * The tickets of the backlog.
     *
     * @return HasMany<Ticket, $this>
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(
            Ticket::class,
            'backlog_id',
            'id'
        );
    }
}
