<?php

namespace App\Http\Controllers;

use App\Models\SectionStyleGroup;
use App\Repositories\Interface\SectionStyleGroupRepositoryInterface;
use Lyre\Controller;

class SectionStyleGroupController extends Controller
{
    public function __construct(
        SectionStyleGroupRepositoryInterface $modelRepository
    ) {
        $model = new SectionStyleGroup();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
