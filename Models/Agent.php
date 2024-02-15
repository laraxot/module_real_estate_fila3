<?php

declare(strict_types=1);

namespace Modules\RealEstate\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Media\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Modules\RealEstate\Models\Agent
 *
 * @property int $id
 * @property string $full_name
 * @property string $title
 * @property string $description
 * @property string|null $photo
 * @property string|null $twitter
 * @property string|null $facebook
 * @property string|null $linkedin
 * @property string|null $instagram
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, Media> $medias
 * @property-read int|null $medias_count
 * @method static \Modules\RealEstate\Database\Factories\AgentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agent whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Agent extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['full_name', 'title', 'description', 'photo', 'twitter', 'facebook', 'linkedin', 'instagram'];

    public function medias(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }
}
