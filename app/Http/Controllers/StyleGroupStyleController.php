<?php

namespace App\Http\Controllers;

use App\Models\StyleGroupStyle;
use App\Repositories\Interface\StyleGroupStyleRepositoryInterface;
use Lyre\Controller;

class StyleGroupStyleController extends Controller
{
    public function __construct(
        StyleGroupStyleRepositoryInterface $modelRepository
    ) {
        $model = new StyleGroupStyle();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
