<?php

namespace App\Http\Resources;

use App\Models\StyleGroupStyle as StyleGroupStyleModel;
use Lyre\Resource;

class StyleGroupStyle extends Resource
{
    public function __construct(StyleGroupStyleModel $model)
    {
        parent::__construct($model);
    }
}
