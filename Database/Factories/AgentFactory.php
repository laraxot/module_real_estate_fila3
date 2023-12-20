<?php

declare(strict_types=1);

namespace Modules\RealEstate\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\RealEstate\Models\Agent;

class AgentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Agent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'full_name' => $this->faker->word,
            'title' => $this->faker->sentence,
            'description' => $this->faker->word,
            'photo' => $this->faker->word,
            'twitter' => $this->faker->word,
            'facebook' => $this->faker->word,
            'linkedin' => $this->faker->word,
            'instagram' => $this->faker->word,
        ];
    }
}
