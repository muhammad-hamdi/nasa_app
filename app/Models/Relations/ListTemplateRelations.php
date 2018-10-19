<?php

namespace App\Models\Relations;

use App\Models\Disaster;
use App\Models\ListTemplateItem;
use App\Models\User;

trait ListTemplateRelations {
    /**
     * List template belongs to one user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * List template belongs to one disaster.
     *
     * @return mixed
     */
    public function disaster()
    {
        return $this->belongsTo(Disaster::class);
    }

    /**
     * List template has many items.
     *
     * @return mixed
     */
    public function items()
    {
        return $this->hasMany(ListTemplateItem::class);
    }
}