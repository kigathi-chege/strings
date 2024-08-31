<?php

namespace App\Http\Resources;

use App\Models\SectionStyle as SectionStyleModel;
use Lyre\Resource;

class SectionStyle extends Resource
{
    public function __construct(SectionStyleModel $model)
    {
        parent::__construct($model);
    }
}
