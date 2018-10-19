<?php

namespace App\Models;

use App\Models\Abstracts\Model;
use App\Models\Relations\ListItemRelations;

class ListItem extends Model
{
    use ListItemRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'checked'
    ];
}
