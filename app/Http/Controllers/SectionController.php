<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Repositories\Interface\SectionRepositoryInterface;
use Illuminate\Http\Request;
use Lyre\Controller;

class SectionController extends Controller
{
    public function __construct(
        SectionRepositoryInterface $modelRepository
    ) {
        $model = new Section();
        $modelConfig = $model->generateConfig();
        parent::__construct($modelConfig, $modelRepository);
    }

    public function show(Request $request, $slug, $scope = null)
    {
        $modelResource = $this->localAuthorize('view', $slug);
        $section = json_decode(json_encode($modelResource));
        return view('section', compact('section'));
    }
}
