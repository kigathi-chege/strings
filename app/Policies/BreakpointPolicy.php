<?php

namespace App\Policies;

use App\Models\Breakpoint;
use Lyre\Policy;

class BreakpointPolicy extends Policy
{
    public function __construct(Breakpoint $model)
    {
        parent::__construct($model);
    }
}
