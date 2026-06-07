<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Playground\Matrix\Concerns;

use Playground\Matrix\Models\Ticket;

/**
 * \Playground\Matrix\Concerns\Creating
 */
trait Creating
{
    protected function getProjectKey(Ticket $ticket): string
    {
        $key = config('playground-matrix.keys.default');
        $key = is_string($key) ? $key : '';

        $project = $ticket->project_id ? $ticket->project()->first() : null;

        if ($project) {
            if (! $project->key) {
                if (config('playground-matrix.keys.allow_empty')) {
                    $key = '';
                }
            } else {
                $key = $project->key;
            }
        }

        return $key;
    }

    protected function handleTicketCode(Ticket $ticket): void
    {
        if (empty($ticket->project_id)) {
            return;
        }

        $ticket->key = $this->getProjectKey($ticket);

        if (! $ticket->key && ! config('playground-matrix.keys.allow_empty')) {
            return;
        }

        $code = Ticket::where('key', 'LIKE', $ticket->key)->max('code');
        $next = is_int($code) && $code > 0 ? ++$code : 1;
        $slug = sprintf(
            '%1$s%2$s%3$d',
            $ticket->key,
            $ticket->key ? '-' : '',
            $next
        );

        $ticket->code = $next;
        $ticket->slug = $slug;
        $ticket->key_code_hash = md5($slug);
    }
}
