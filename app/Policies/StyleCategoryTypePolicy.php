<?php

namespace App\Policies;

use App\Models\StyleCategoryType;
use Lyre\Policy;

class StyleCategoryTypePolicy extends Policy
{
    public function __construct(StyleCategoryType $model)
    {
        parent::__construct($model);
    }
}
