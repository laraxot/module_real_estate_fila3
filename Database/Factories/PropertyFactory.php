<?php

declare(strict_types=1);

namespace Modules\RealEstate\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\RealEstate\Models\Property;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'agent_id' => $this->faker->randomNumber(5),
            'price' => $this->faker->randomNumber(5),
            'address' => $this->faker->address,
            'country' => $this->faker->country,
            'beds' => $this->faker->word,
            'baths' => $this->faker->word,
            'description' => $this->faker->text,
            'is_popular' => $this->faker->boolean,
            'is_featured' => $this->faker->boolean,
        ];
    }
}
