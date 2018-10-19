<?php

namespace App\Models\Relations;

use App\Models\ItemList;

trait ListItemRelations {
    /**
     * List Item belongs to one list.
     *
     * @return mixed
     */
    public function list()
    {
        return $this->belongsTo(ItemList::class);
    }
}