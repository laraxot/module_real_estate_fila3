<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\RealEstate\Models\Property;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreatePropertiesTable.
 */
class CreateRealEstatePropertiesTable extends XotBaseMigration
{
    protected ?string $model_class = Property::class;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();

                $table->foreignId('agent_id')->constrained();
                $table->integer('price');
                $table->string('address');
                $table->string('country');
                $table->string('beds');
                $table->string('baths');
                $table->text('description');
                $table->boolean('is_popular');
                $table->boolean('is_featured');

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
                // if (! $this->hasColumn('profile_photo_path')) {
                //    $table->string('profile_photo_path', 2048)->nullable();
                // }
                // $this->updateTimestamps($table);
            }
        );
    }
}
