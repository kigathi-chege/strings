<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\StyleGroup;
use App\Repositories\Interface\StyleGroupRepositoryInterface;

class StyleGroupRepository extends Repository implements StyleGroupRepositoryInterface
{
    protected $model;

    public function __construct(StyleGroup $model)
    {
        parent::__construct($model);
    }
}
