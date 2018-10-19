<?php

namespace App\Models\Relations;

use App\Models\Disaster;
use App\Models\User;

trait TutorialRelations {
    /**
     * tutorial belongs to many users.
     *
     * @return mixed
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * tutorial belongs to one disaster.
     *
     * @return mixed
     */
    public function disaster()
    {
        return $this->belongsTo(Disaster::class);
    }
}