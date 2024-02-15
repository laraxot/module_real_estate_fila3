<?php

declare(strict_types=1);

namespace Modules\RealEstate\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Media\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Modules\RealEstate\Models\Property
 *
 * @property int $id
 * @property int $agent_id
 * @property int $price
 * @property string $address
 * @property string $country
 * @property string $beds
 * @property string $baths
 * @property string $description
 * @property int $is_popular
 * @property int $is_featured
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property-read Agent $agent
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $medias
 * @property-read int|null $medias_count
 * @method static \Modules\RealEstate\Database\Factories\PropertyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBaths($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBeds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereIsPopular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Property extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'agent_id',
        'price',
        'address',
        'country',
        'beds', 'baths',
        'description',
        'is_popular',
        'is_featured',
    ];

    // public function images(): HasMany
    // {
    //     return $this->hasMany(Image::class);
    // }

    public function medias(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
