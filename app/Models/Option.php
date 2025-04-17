<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Option extends Model
{
    /** @use HasFactory<\Database\Factories\OptionFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function configurations(): belongsToMany
    {
//        return $this->belongsTomany(Configuration::class, 'configuration_options', 'option_id', 'option_id');
        return $this->belongsToMany(Configuration::class);
    }
}
