<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\StyleGroupStyle;
use App\Repositories\Interface\StyleGroupStyleRepositoryInterface;

class StyleGroupStyleRepository extends Repository implements StyleGroupStyleRepositoryInterface
{
    protected $model;

    public function __construct(StyleGroupStyle $model)
    {
        parent::__construct($model);
    }
}
