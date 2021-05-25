<?php

namespace Database\Factories;

use App\Models\TeamMembers;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamMembersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamMembers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_id' => $this->faker->unique(true)->numberBetween(1, 15),
            'member_id' => $this->faker->unique(true)->numberBetween(1, 100)
        ];
    }
}
