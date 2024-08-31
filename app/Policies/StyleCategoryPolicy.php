<?php

namespace App\Policies;

use App\Models\StyleCategory;
use Lyre\Policy;

class StyleCategoryPolicy extends Policy
{
    public function __construct(StyleCategory $model)
    {
        parent::__construct($model);
    }
}
