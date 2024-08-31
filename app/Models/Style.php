<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Lyre\Model;

class Style extends Model
{
    use HasFactory;

    const NAME_COLUMN = 'title';

    /**
     * Get the sections associated with this style.
     */
    public function sections()
    {
        return $this->belongsToMany(Section::class, 'section_styles', 'style_id', 'section_id');
    }
}
