<?php

namespace App\Policies;

use App\Models\Color;
use Lyre\Policy;

class ColorPolicy extends Policy
{
    public function __construct(Color $model)
    {
        parent::__construct($model);
    }
}
