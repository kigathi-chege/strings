<?php

namespace App\Policies;

use App\Models\Page;
use Lyre\Policy;

class PagePolicy extends Policy
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }
}
