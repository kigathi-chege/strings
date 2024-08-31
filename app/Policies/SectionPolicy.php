<?php

namespace App\Policies;

use App\Models\Section;
use Lyre\Policy;

class SectionPolicy extends Policy
{
    public function __construct(Section $model)
    {
        parent::__construct($model);
    }
}
