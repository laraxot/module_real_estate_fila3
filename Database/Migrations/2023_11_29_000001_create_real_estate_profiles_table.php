<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\RealEstate\Models\Profile;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreatePropertiesTable.
 */
class CreateRealEstateProfilesTable extends XotBaseMigration
{
    protected ?string $model_class = Profile::class;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();

            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('first_name')) {
                    $table->string('first_name')->nullable();
                    $table->string('last_name')->nullable();
                }
                // if (! $this->hasColumn('profile_photo_path')) {
                //    $table->string('profile_photo_path', 2048)->nullable();
                // }
                $this->updateTimestamps($table);
            }
        );
    }
}
