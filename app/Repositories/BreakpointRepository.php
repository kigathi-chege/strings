<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\Breakpoint;
use App\Repositories\Interface\BreakpointRepositoryInterface;

class BreakpointRepository extends Repository implements BreakpointRepositoryInterface
{
    protected $model;

    public function __construct(Breakpoint $model)
    {
        parent::__construct($model);
    }
}
