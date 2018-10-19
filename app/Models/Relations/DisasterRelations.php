<?php

namespace App\Models\Relations;

use App\Models\ListTemplate;
use App\Models\Tutorial;

trait DisasterRelations {
    /**
     * Disaster has many list templates.
     *
     * @return mixed
     */
    public function listTemplates()
    {
        return $this->hasMany(ListTemplate::class);
    }

    /**
     * Disaster has many tutorials.
     *
     * @return mixed
     */
    public function tutorials()
    {
        return $this->hasMany(Tutorial::class);
    }
}