<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Repositories\Interface\PageRepositoryInterface;
use Lyre\Controller;

class PageController extends Controller
{
    public function __construct(
        PageRepositoryInterface $modelRepository
    ) {
        $model = new Page();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
