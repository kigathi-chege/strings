<?php

namespace App\Http\Controllers;

use App\Models\StyleGroup;
use App\Repositories\Interface\StyleGroupRepositoryInterface;
use Lyre\Controller;

class StyleGroupController extends Controller
{
    public function __construct(
        StyleGroupRepositoryInterface $modelRepository
    ) {
        $model = new StyleGroup();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
