<?php

namespace App\Http\Resources;

use App\Models\Spacing as SpacingModel;
use Lyre\Resource;

class Spacing extends Resource
{
    public function __construct(SpacingModel $model)
    {
        parent::__construct($model);
    }
}
