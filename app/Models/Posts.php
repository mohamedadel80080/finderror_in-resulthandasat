<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\Likeable;

class Posts extends Model

{
    use HasFactory ,Likeable;

    protected $fillable = [
        'title',
        'images',
    ];
}

