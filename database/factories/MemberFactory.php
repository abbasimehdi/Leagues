<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'team_id' => 1,
            'position' => 'player',
            'post' => 'player',
            'bit' => 0,
            'nationality' => $this->faker->name,
            'age' => 21,
            'extra_info' => $this->faker->name
        ];
    }
}