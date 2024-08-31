<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\Color;
use App\Repositories\Interface\ColorRepositoryInterface;

class ColorRepository extends Repository implements ColorRepositoryInterface
{
    protected $model;

    public function __construct(Color $model)
    {
        parent::__construct($model);
    }
}
