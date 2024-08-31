<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\SectionStyle;
use App\Repositories\Interface\SectionStyleRepositoryInterface;

class SectionStyleRepository extends Repository implements SectionStyleRepositoryInterface
{
    protected $model;

    public function __construct(SectionStyle $model)
    {
        parent::__construct($model);
    }
}
