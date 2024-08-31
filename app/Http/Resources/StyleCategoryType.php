<?php

namespace App\Http\Resources;

use App\Models\StyleCategoryType as StyleCategoryTypeModel;
use Lyre\Resource;

class StyleCategoryType extends Resource
{
    public function __construct(StyleCategoryTypeModel $model)
    {
        parent::__construct($model);
    }
}
