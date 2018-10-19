<?php

namespace App\Models\Relations;

use App\Models\ListItem;
use App\Models\User;

trait ItemListRelations {
    /**
     * item list belongs to one user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * item list has many items.
     *
     * @return mixed
     */
    public function items()
    {
        return $this->hasMany(ListItem::class);
    }
}