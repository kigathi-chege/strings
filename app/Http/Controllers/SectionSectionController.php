<?php

namespace App\Http\Controllers;

use App\Models\SectionSection;
use App\Repositories\Interface\SectionSectionRepositoryInterface;
use Lyre\Controller;

class SectionSectionController extends Controller
{
    public function __construct(
        SectionSectionRepositoryInterface $modelRepository
    ) {
        $model = new SectionSection();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }
}
