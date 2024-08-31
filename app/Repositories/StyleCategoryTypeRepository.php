<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\StyleCategoryType;
use App\Repositories\Interface\StyleCategoryTypeRepositoryInterface;

class StyleCategoryTypeRepository extends Repository implements StyleCategoryTypeRepositoryInterface
{
    protected $model;

    public function __construct(StyleCategoryType $model)
    {
        parent::__construct($model);
    }
}
