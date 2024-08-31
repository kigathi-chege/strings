<?php

namespace App\Http\Resources;

use App\Models\StyleGroup as StyleGroupModel;
use Lyre\Resource;

class StyleGroup extends Resource
{
    public function __construct(StyleGroupModel $model)
    {
        parent::__construct($model);
    }
}
