<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title','category','description','media'];

    protected $casts = [
        'media' => 'array',
    ];
}
