<?php

namespace App\Policies;

use App\Models\SectionStyleGroup;
use Lyre\Policy;

class SectionStyleGroupPolicy extends Policy
{
    public function __construct(SectionStyleGroup $model)
    {
        parent::__construct($model);
    }
}
