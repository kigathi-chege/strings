<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Lyre\Model;

class StyleCategory extends Model
{
    use HasFactory;

    const NAME_COLUMN = 'title';
}
