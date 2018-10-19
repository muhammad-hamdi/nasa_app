<?php

namespace App\Models;

use App\Models\Abstracts\Model;
use App\Models\Relations\TutorialRelations;

class Tutorial extends Model
{
    use TutorialRelations;

    protected $fillable = [
        'title',
        'content',
        'disaster_id'
    ];
}
