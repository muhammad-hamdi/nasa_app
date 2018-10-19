<?php

namespace App\Models;

use App\Models\Abstracts\Model;
use App\Models\Relations\ItemListRelations;

class ItemList extends Model
{
    use ItemListRelations;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
