<?php

declare(strict_types=1);

namespace Modules\RealEstate\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\RealEstate\Models\Testimonial;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'full_name' => $this->faker->word,
            'photo' => $this->faker->word,
            'company' => $this->faker->company,
            'rating' => $this->faker->randomNumber(5),
            'testimonial' => $this->faker->word,
        ];
    }
}
