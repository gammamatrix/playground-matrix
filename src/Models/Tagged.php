<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Playground\Matrix\Models;

use Database\Factories\Playground\Matrix\Models\TaggedFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use Playground\Models\User;
use Playground\Models\UuidModel;

/**
 * \Playground\Matrix\Models\Tagged
 *
 * @property string $id
 * @property ?scalar $created_by_id
 * @property ?string $tag_id
 * @property ?string $matrix_id
 * @property ?string $backlog_id
 * @property ?string $board_id
 * @property ?string $epic_id
 * @property ?string $flow_id
 * @property ?string $milestone_id
 * @property ?string $note_id
 * @property ?string $project_id
 * @property ?string $release_id
 * @property ?string $roadmap_id
 * @property ?string $source_id
 * @property ?string $sprint_id
 * @property ?string $team_id
 * @property ?string $ticket_id
 * @property ?string $version_id
 * @property ?Carbon $created_at
 */
class Tagged extends UuidModel
{
    const UPDATED_AT = null;

    /** @use HasFactory<TaggedFactory> */
    use HasFactory;

    protected $table = 'matrix_tagged';

    protected $attributes = [
        'created_by_id' => null,
        'tag_id' => null,
        'matrix_id' => null,
        'backlog_id' => null,
        'board_id' => null,
        'epic_id' => null,
        'flow_id' => null,
        'milestone_id' => null,
        'note_id' => null,
        'project_id' => null,
        'release_id' => null,
        'roadmap_id' => null,
        'source_id' => null,
        'sprint_id' => null,
        'team_id' => null,
        'ticket_id' => null,
        'version_id' => null,
        'created_at' => null,
    ];

    protected $fillable = [
        'tag_id',
        'matrix_id',
        'backlog_id',
        'board_id',
        'epic_id',
        'flow_id',
        'milestone_id',
        'note_id',
        'project_id',
        'release_id',
        'roadmap_id',
        'source_id',
        'sprint_id',
        'team_id',
        'ticket_id',
        'version_id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    /**
     * The creator.
     *
     * @return HasOne<User, $this>
     */
    public function creator(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'created_by_id'
        );
    }

    /**
     * The tagged tag.
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
     * The tagged backlog.
     *
     * @return HasOne<Backlog, $this>
     */
    public function backlog(): HasOne
    {
        return $this->hasOne(
            Backlog::class,
            'id',
            'backlog_id'
        );
    }

    /**
     * The tagged board.
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
     * The tagged epic.
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
     * The tagged flow.
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
     * The tagged matrix.
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
     * The tagged milestone.
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
     * The tagged note.
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
     * The tagged project.
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
     * The tagged release.
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
     * The tagged roadmap.
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
     * The tagged source.
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
     * The tagged sprint.
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
     * The tagged team.
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
     * The tagged ticket.
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
     * The tagged version.
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
}
