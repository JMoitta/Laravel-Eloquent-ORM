<?php

namespace App\Models;

use App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class SoccerTeam extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    //many-to-one
    //one-to-many

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
