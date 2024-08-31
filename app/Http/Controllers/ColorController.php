<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Repositories\Interface\ColorRepositoryInterface;
use Lyre\Controller;

class ColorController extends Controller
{
    public function __construct(
        ColorRepositoryInterface $modelRepository
    ) {
        $model = new Color();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
