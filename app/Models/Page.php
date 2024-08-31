<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Lyre\Model;

class Page extends Model
{
    use HasFactory;

    const NAME_COLUMN = 'title';

    /**
     * Get the pages that are children of this page.
     */
    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id', 'id');
    }
}
