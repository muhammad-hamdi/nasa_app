<?php

namespace App\Models\Relations;

use App\Models\ListTemplate;

trait ListTemplateItemRelations {
    /**
     * List template item belongs to one list template
     *
     * @return mixed
     */
    public function listTemplate()
    {
        return $this->belongsTo(ListTemplate::class);
    }
}