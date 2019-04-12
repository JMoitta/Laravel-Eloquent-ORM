<?php

use App\Models\Client;
use App\Models\ClientProfile;

use Illuminate\Database\Seeder;

class ClientProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \Illuminate\Database\Eloquent\Collection $clients */
        $clients = \App\Models\Client::all();
        $countClients = $clients->count();
        
        /** @var \Illuminate\Database\Eloquent\Collection $collectionLegal */
        $collectionLegal = factory(ClientProfile::class, $countClients)
        ->states(Client::TYPE_LEGAL)->make();
        $collectionLegal->each(function ($clientProfile) use ($clients)
        {
            $clientProfile->soccer_team_id = $soccers->random()->id;
            $clientProfile->save();
        });
    }
}
