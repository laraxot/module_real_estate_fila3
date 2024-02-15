<?php

declare(strict_types=1);

namespace Modules\RealEstate\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Media\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Modules\RealEstate\Models\Testimonial
 *
 * @property int $id
 * @property string $full_name
 * @property string $photo
 * @property string $company
 * @property int $rating
 * @property string $testimonial
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $medias
 * @property-read int|null $medias_count
 *
 * @method static \Modules\RealEstate\Database\Factories\TestimonialFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereTestimonial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedBy($value)
 *
 * @mixin \Eloquent
 */
class Testimonial extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['full_name', 'photo', 'company', 'rating', 'testimonial'];

    public function medias(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }
}
