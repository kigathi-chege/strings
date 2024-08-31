<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\Style;
use App\Repositories\Interface\StyleRepositoryInterface;

class StyleRepository extends Repository implements StyleRepositoryInterface
{
    protected $model;

    public function __construct(Style $model)
    {
        parent::__construct($model);
    }
}
