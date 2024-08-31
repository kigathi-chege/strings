<?php

namespace App\Http\Resources;

use App\Models\Style as StyleModel;
use Lyre\Resource;

class Style extends Resource
{
    public function __construct(StyleModel $model)
    {
        parent::__construct($model);
    }
}
