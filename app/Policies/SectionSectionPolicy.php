<?php

namespace App\Policies;

use App\Models\SectionSection;
use Lyre\Policy;

class SectionSectionPolicy extends Policy
{
    public function __construct(SectionSection $model)
    {
        parent::__construct($model);
    }
}
