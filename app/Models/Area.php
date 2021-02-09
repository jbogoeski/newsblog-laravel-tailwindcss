<?php

namespace App\Models;

use App\Models\Post;
use App\Models\SubArea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;


    protected $guarded = [];


    public function subarea()
    {
        return $this->hasMany(SubArea::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
