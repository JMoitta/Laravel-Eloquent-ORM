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
        
        $clients->each(function ($client)
        {
            $clientProfile = factory(ClientProfile::class)->make();
            $client->clientProfile()->create($clientProfile->toArray());
        });

        /** @var \Illuminate\Database\Eloquent\Collection $collectionLegal */
        /*$collectionLegal = factory(ClientProfile::class, $countClients)
            ->make();
        $collectionLegal->each(function ($clientProfile) use ($clients)
        {
            $clientProfile->client_id = $clients->random()->id;
            $clientProfile->save();
        });*/
    }
}
