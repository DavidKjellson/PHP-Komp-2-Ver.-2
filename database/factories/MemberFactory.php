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
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'birthday' => $this->faker->date,
            'email' => $this->faker->email,
            'member_fee' => $this->faker->randomNumber(),
            // 'team_id' => $this->faker->unique(true)->numberBetween(1, 15)
        ];
    }
}
