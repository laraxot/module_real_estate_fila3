<?php

declare(strict_types=1);

namespace Modules\RealEstate\View\Composers;

use Modules\RealEstate\Models\Agent;
use Modules\RealEstate\Models\Property;
use Modules\RealEstate\Models\Testimonial;

class ThemeComposer
{
    // public function properties(){
    //     return Property::all();
    // }

    public function getReProperties(): \Illuminate\Database\Eloquent\Collection
    {
        return Property::all();
    }

    public function getReTestimonials(): \Illuminate\Database\Eloquent\Collection
    {
        return Testimonial::all();
    }

    public function getReAgents(): \Illuminate\Database\Eloquent\Collection
    {
        return Agent::all();
    }
}
