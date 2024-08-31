<?php

namespace App\Policies;

use App\Models\StyleGroupStyle;
use Lyre\Policy;

class StyleGroupStylePolicy extends Policy
{
    public function __construct(StyleGroupStyle $model)
    {
        parent::__construct($model);
    }
}
