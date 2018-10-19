<?php

namespace App\Models;

use App\Models\Abstracts\Model;
use App\Models\Relations\ListTemplateRelations;

class ListTemplate extends Model
{
    use ListTemplateRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'disaster_id',
        'is_public',
    ];
}
