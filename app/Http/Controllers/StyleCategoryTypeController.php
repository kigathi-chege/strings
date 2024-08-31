<?php

namespace App\Http\Controllers;

use App\Models\StyleCategoryType;
use App\Repositories\Interface\StyleCategoryTypeRepositoryInterface;
use Lyre\Controller;

class StyleCategoryTypeController extends Controller
{
    public function __construct(
        StyleCategoryTypeRepositoryInterface $modelRepository
    ) {
        $model = new StyleCategoryType();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
