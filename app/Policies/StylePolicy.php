<?php

namespace App\Policies;

use App\Models\Style;
use Lyre\Policy;

class StylePolicy extends Policy
{
    public function __construct(Style $model)
    {
        parent::__construct($model);
    }
}
