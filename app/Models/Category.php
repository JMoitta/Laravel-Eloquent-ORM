<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorias';

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}