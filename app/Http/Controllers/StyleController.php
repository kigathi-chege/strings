<?php

namespace App\Http\Controllers;

use App\Models\Style;
use App\Repositories\Interface\StyleRepositoryInterface;
use Lyre\Controller;

class StyleController extends Controller
{
    public function __construct(
        StyleRepositoryInterface $modelRepository
    ) {
        $model = new Style();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
