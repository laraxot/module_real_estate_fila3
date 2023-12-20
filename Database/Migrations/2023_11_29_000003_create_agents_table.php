<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateAgentsTable.
 */
class CreateAgentsTable extends XotBaseMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->string('full_name');
                $table->string('title');
                $table->string('description');
                $table->string('photo');
                $table->string('twitter');
                $table->string('facebook');
                $table->string('linkedin');
                $table->string('instagram');
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                }
                if ($this->hasColumn('photo')) {
                    $table->string('photo')->nullable()->change();
                }
                if ($this->hasColumn('twitter')) {
                    $table->string('twitter')->nullable()->change();
                    $table->string('facebook')->nullable()->change();
                    $table->string('linkedin')->nullable()->change();
                    $table->string('instagram')->nullable()->change();
                }
                // if (! $this->hasColumn('current_team_id')) {
                //    $table->foreignId('current_team_id')->nullable();
                // }
                // if (! $this->hasColumn('profile_photo_path')) {
                //    $table->string('profile_photo_path', 2048)->nullable();
                // }
                // $this->updateTimestamps($table);
            }
        );
    }
}
