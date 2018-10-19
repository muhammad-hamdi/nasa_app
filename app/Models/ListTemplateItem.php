<?php

namespace App\Models;

use App\Models\Abstracts\Model;
use App\Models\Relations\ListTemplateItemRelations;

class ListTemplateItem extends Model
{
    use ListTemplateItemRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];
}
