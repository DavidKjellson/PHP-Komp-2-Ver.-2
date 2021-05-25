<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TeamMembers::factory()->count(200)->create();
    }
}
