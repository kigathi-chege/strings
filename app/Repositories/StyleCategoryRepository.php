<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\StyleCategory;
use App\Repositories\Interface\StyleCategoryRepositoryInterface;

class StyleCategoryRepository extends Repository implements StyleCategoryRepositoryInterface
{
    protected $model;

    public function __construct(StyleCategory $model)
    {
        parent::__construct($model);
    }
}
