<?php

namespace App\Http\Controllers;

use App\Models\StyleCategory;
use App\Repositories\Interface\StyleCategoryRepositoryInterface;
use Lyre\Controller;

class StyleCategoryController extends Controller
{
    public function __construct(
        StyleCategoryRepositoryInterface $modelRepository
    ) {
        $model = new StyleCategory();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
