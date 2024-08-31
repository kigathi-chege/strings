<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\Section;
use App\Repositories\Interface\SectionRepositoryInterface;

class SectionRepository extends Repository implements SectionRepositoryInterface
{
    protected $model;

    public function __construct(Section $model)
    {
        parent::__construct($model);
        $this->relations = ['children', 'parents', 'styles'];
    }
}
