<?php

namespace App\Http\Resources;

use App\Models\PageSection as PageSectionModel;
use Lyre\Resource;

class PageSection extends Resource
{
    public function __construct(PageSectionModel $model)
    {
        parent::__construct($model);
    }
}
