<?php

namespace App\Http\Resources;

use App\Models\Section as SectionModel;
use Lyre\Resource;

class Section extends Resource
{
    public function __construct(SectionModel $model)
    {
        parent::__construct($model);
    }

    public static function serializableColumns($resource = null)
    {
        $columns = parent::serializableColumns($resource);

        $appendColumns = collect([
            'content' => 'content',
            'type' => 'type',
            'description' => 'description',
            'processed_styles' => 'title',
        ]);

        return $columns->merge($appendColumns);
    }

    public static function columnMeta($resource = null)
    {
        return [
            'processed_styles' => fn() => implode(' ', $resource->styles->map(fn($style) => $style->content)->toArray()),
        ];
    }

    public static function loadResources(): array
    {
        return [
            'children' => self::class,
            'parents' => self::class,
            // 'styles' => Style::class,
        ];
    }
}
