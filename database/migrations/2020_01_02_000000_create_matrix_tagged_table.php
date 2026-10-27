<?php

/**
 * Playground
 */

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Playground\Matrix\Models\Tagged;

/**
 * @see Tagged
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matrix_tagged', function (Blueprint $table) {

            // Primary key

            $table->uuid('id')->primary();

            // IDs

            $table->uuid('created_by_id')->nullable()->index();
            $table->uuid('tag_id')->nullable()->index();
            $table->uuid('matrix_id')->nullable()->index();
            $table->uuid('backlog_id')->nullable()->index();
            $table->uuid('board_id')->nullable()->index();
            $table->uuid('epic_id')->nullable()->index();
            $table->uuid('flow_id')->nullable()->index();
            $table->uuid('milestone_id')->nullable()->index();
            $table->uuid('note_id')->nullable()->index();
            $table->uuid('project_id')->nullable()->index();
            $table->uuid('release_id')->nullable()->index();
            $table->uuid('roadmap_id')->nullable()->index();
            $table->uuid('source_id')->nullable()->index();
            $table->uuid('sprint_id')->nullable()->index();
            $table->uuid('team_id')->nullable()->index();
            $table->uuid('ticket_id')->nullable()->index();
            $table->uuid('version_id')->nullable()->index();

            // Dates

            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matrix_tagged');
    }
};
