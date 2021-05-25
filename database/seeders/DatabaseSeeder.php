<?php

namespace Database\Seeders;

use App\Models\TeamMembers;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MemberSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TeamMembersSeeder::class);
    }
}
