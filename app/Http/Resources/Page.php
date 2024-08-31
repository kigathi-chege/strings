<?php

namespace App\Http\Resources;

use App\Models\Page as PageModel;
use Lyre\Resource;

class Page extends Resource
{
    public function __construct(PageModel $model)
    {
        parent::__construct($model);
    }

    public static function loadResources(): array
    {
        return [
            'children' => self::class
        ];
    }
}
