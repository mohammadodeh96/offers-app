<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['store_name', 'store_location','favicon'];


    public function offer()
    {
        return $this->hasMany(OfferData::class);
    }
}
