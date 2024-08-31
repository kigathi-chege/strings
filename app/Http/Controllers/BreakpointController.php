<?php

namespace App\Http\Controllers;

use App\Models\Breakpoint;
use App\Repositories\Interface\BreakpointRepositoryInterface;
use Lyre\Controller;

class BreakpointController extends Controller
{
    public function __construct(
        BreakpointRepositoryInterface $modelRepository
    ) {
        $model = new Breakpoint();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
