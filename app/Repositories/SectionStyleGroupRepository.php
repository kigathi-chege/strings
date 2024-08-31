<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\SectionStyleGroup;
use App\Repositories\Interface\SectionStyleGroupRepositoryInterface;

class SectionStyleGroupRepository extends Repository implements SectionStyleGroupRepositoryInterface
{
    protected $model;

    public function __construct(SectionStyleGroup $model)
    {
        parent::__construct($model);
    }
}
