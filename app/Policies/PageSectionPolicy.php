<?php

namespace App\Policies;

use App\Models\PageSection;
use Lyre\Policy;

class PageSectionPolicy extends Policy
{
    public function __construct(PageSection $model)
    {
        parent::__construct($model);
    }
}
