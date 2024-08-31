<?php

namespace App\Http\Resources;

use App\Models\SectionStyleGroup as SectionStyleGroupModel;
use Lyre\Resource;

class SectionStyleGroup extends Resource
{
    public function __construct(SectionStyleGroupModel $model)
    {
        parent::__construct($model);
    }
}
