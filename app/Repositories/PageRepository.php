<?php

namespace App\Repositories;

use App\Models\Page;
use App\Repositories\Interface\PageRepositoryInterface;
use Lyre\Repository;

class PageRepository extends Repository implements PageRepositoryInterface
{
    protected $model;
    protected $orderByColumn = 'index';
    protected $relations = ['children'];

    public function __construct(Page $model)
    {
        parent::__construct($model);
    }
}
