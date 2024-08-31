<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Lyre\Model;

class Section extends Model
{
    use HasFactory;

    const NAME_COLUMN = 'title';

    /**
     * Get the sections that are children of this section.
     */
    public function children()
    {
        return $this->belongsToMany(Section::class, 'section_sections', 'parent_id', 'child_id')
            ->withPivot('index')
            ->withTimestamps();
    }

    /**
     * Get the sections that are parents of this section.
     */
    public function parents()
    {
        return $this->belongsToMany(Section::class, 'section_sections', 'child_id', 'parent_id')
            ->withPivot('index')
            ->withTimestamps();
    }

    /**
     * Get the styles associated with this section.
     */
    public function styles()
    {
        return $this->belongsToMany(Style::class, 'section_styles', 'section_id', 'style_id');
    }
}
