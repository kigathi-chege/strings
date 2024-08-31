<?php

namespace App\Http\Controllers;

use App\Models\Spacing;
use App\Repositories\Interface\SpacingRepositoryInterface;
use Lyre\Controller;

class SpacingController extends Controller
{
    public function __construct(
        SpacingRepositoryInterface $modelRepository
    ) {
        $model = new Spacing();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
