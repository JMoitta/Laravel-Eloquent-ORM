<?php

use App\Models\Client;

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Client::class, 10)
        //     ->states(Client::TYPE_INDIVIDUAL)->create();
        // factory(Client::class, 10)
        //     ->states(Client::TYPE_LEGAL)->create();
 

        /** @var \Illuminate\Database\Eloquent\Collection $soccers */
        $soccers = \App\Models\SoccerTeam::all();

        /** @var \Illuminate\Database\Eloquent\Collection $collectionIndividual */
        $collectionIndividual = factory(Client::class, 10)
            ->states(Client::TYPE_INDIVIDUAL)->make();
        $collectionIndividual->each(function ($client) use ($soccers)
        {
            $client->soccer_team_id = $soccers->random()->id;
            $client->save();
        }); 
         
        /** @var \Illuminate\Database\Eloquent\Collection $collectionLegal */
        $collectionLegal = factory(Client::class, 10)
             ->states(Client::TYPE_LEGAL)->make();
        $collectionLegal->each(function ($client) use ($soccers)
        {
            $client->soccer_team_id = $soccers->random()->id;
            $client->save();
        }); 
    }
}
