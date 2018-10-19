<?php

namespace App\Models\Relations;

use App\Models\ItemList;
use App\Models\ListTemplate;
use App\Models\Tutorial;

trait UserRelations {
    /**
     * user belongs to many tutorials.
     *
     * @return mixed
     */
    public function tutorials()
    {
        return $this->belongsToMany(Tutorial::class);
    }

    /**
     * user has many lists.
     *
     * @return mixed
     */
    public function lists()
    {
        return $this->hasMany(ItemList::class);
    }

    /**
     * user has many list templates.
     *
     * @return mixed
     */
    public function listTemplates()
    {
        return $this->hasMany(ListTemplate::class);
    }
}