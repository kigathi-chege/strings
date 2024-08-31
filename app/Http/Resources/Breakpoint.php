<?php

namespace App\Http\Resources;

use App\Models\Breakpoint as BreakpointModel;
use Lyre\Resource;

class Breakpoint extends Resource
{
    public function __construct(BreakpointModel $model)
    {
        parent::__construct($model);
    }
}
