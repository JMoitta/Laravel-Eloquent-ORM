<?php

use \App\Models\SoccerTeam;

use Illuminate\Database\Seeder;

class SoccerTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SoccerTeam::class, 10)->create();
    }
}
