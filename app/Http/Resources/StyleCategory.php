<?php

namespace App\Http\Resources;

use App\Models\StyleCategory as StyleCategoryModel;
use Lyre\Resource;

class StyleCategory extends Resource
{
    public function __construct(StyleCategoryModel $model)
    {
        parent::__construct($model);
    }
}
