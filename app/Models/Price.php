<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /** @use HasFactory<\Database\Factories\PriceFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'configuration_id', 'id');
    }
}
