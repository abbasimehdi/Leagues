<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Member;
use App\Models\Team;
use Illuminate\Database\Seeder;

class LeaguesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        League::factory(1)->create();
        Team::factory(1)->create();
        Member::factory(23)->create();

    }
}
