<?php

namespace App\Http\Controllers;

use App\Models\PageSection;
use App\Repositories\Interface\PageSectionRepositoryInterface;
use Lyre\Controller;

class PageSectionController extends Controller
{
    public function __construct(
        PageSectionRepositoryInterface $modelRepository
    ) {
        $model = new PageSection();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
