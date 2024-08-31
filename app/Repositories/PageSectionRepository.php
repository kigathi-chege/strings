<?php

namespace App\Repositories;

use Lyre\Repository;
use App\Models\PageSection;
use App\Repositories\Interface\PageSectionRepositoryInterface;

class PageSectionRepository extends Repository implements PageSectionRepositoryInterface
{
    protected $model;

    public function __construct(PageSection $model)
    {
        parent::__construct($model);
    }
}
