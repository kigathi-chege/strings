<?php

namespace App\Policies;

use App\Models\Spacing;
use Lyre\Policy;

class SpacingPolicy extends Policy
{
    public function __construct(Spacing $model)
    {
        parent::__construct($model);
    }
}
