<?php

namespace App\Policies;

use App\Models\StyleGroup;
use Lyre\Policy;

class StyleGroupPolicy extends Policy
{
    public function __construct(StyleGroup $model)
    {
        parent::__construct($model);
    }
}
