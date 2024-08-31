<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\Spacing;
use App\Repositories\Interface\SpacingRepositoryInterface;

class SpacingRepository extends Repository implements SpacingRepositoryInterface
{
    protected $model;

    public function __construct(Spacing $model)
    {
        parent::__construct($model);
    }
}
