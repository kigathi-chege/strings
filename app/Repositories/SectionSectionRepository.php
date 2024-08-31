<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\SectionSection;
use App\Repositories\Interface\SectionSectionRepositoryInterface;

class SectionSectionRepository extends Repository implements SectionSectionRepositoryInterface
{
    protected $model;

    public function __construct(SectionSection $model)
    {
        parent::__construct($model);
    }
}
