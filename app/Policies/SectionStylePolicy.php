<?php

namespace App\Policies;

use App\Models\SectionStyle;
use Lyre\Policy;

class SectionStylePolicy extends Policy
{
    public function __construct(SectionStyle $model)
    {
        parent::__construct($model);
    }
}
