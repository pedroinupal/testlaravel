<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Team::class;

    public function definition(): array
    {
        return [
            'name'          => $this->faker->firstname(),
            'titles'         => $this->faker->numberBetween(0, 5),
            'city_id'          => $this->faker->numberBetween(1, 20),
            'division_id'   => $this->faker->numberBetween(1, 8),
            'conference_id' => $this->faker->numberBetween(1, 2)
        ];
    }
}
