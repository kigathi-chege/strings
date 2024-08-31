<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Lyre\Model;

class Color extends Model
{
    use HasFactory;

    const NAME_COLUMN = 'title';

    protected $table = 'colors';
}
