<?php

namespace App\Http\Controllers;

use App\Models\SectionStyle;
use App\Repositories\Interface\SectionStyleRepositoryInterface;
use Lyre\Controller;

class SectionStyleController extends Controller
{
    public function __construct(
        SectionStyleRepositoryInterface $modelRepository
    ) {
        $model = new SectionStyle();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
