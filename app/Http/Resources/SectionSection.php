<?php

namespace App\Http\Resources;

use App\Models\SectionSection as SectionSectionModel;
use Lyre\Resource;

class SectionSection extends Resource
{
    public function __construct(SectionSectionModel $model)
    {
        parent::__construct($model);
    }
}
