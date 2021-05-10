<?php

// /** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Team;
// use Faker\Generator as Faker;

// $factory->define(Team::class, function (Faker $faker) {
//     return [
//         'team_name' => $faker->name,
//         'team_activity' => ''
//     ];
// });

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_name' => $this->faker->name,

        ];
    }
}
