<?php

namespace App\Models;

use App\Models\Abstracts\Model;
use App\Models\Concerns\HasMediaTrait;
use App\Models\Relations\DisasterRelations;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Disaster extends Model implements HasMedia
{
    use DisasterRelations, HasMediaTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];
}
