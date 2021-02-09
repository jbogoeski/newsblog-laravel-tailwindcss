<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function subcategory()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
