<?php

namespace Database\Factories;

use App\Models\League;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeagueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = League::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'league',
            'flag' => $this->faker->name,
            'contient_name' => 'europe',
            'country_name' => 'country',
            'state_name' => $this->faker->name,
            'city_name' => $this->faker->name,
            'extra_info' => $this->faker->name,
        ];
    }
}
