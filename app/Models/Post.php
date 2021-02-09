<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';


    protected $guarded = [];

    public function setTitleEnAttribute($value)
    {
        $this->attributes['title_en'] = $value;
        $this->attributes['slug_en'] = Str::slug($value);
    }
    
    public function setTitleMkAttribute($value)
    {
        $this->attributes['title_mk'] = $value;
        $this->attributes['slug_mk'] = Str::slug($value);
    }

    public function setUserIdAttribute($value)
    {   
        $value = Auth::id();
        if(!Auth::id()){
            $this->attributes['user_id'] = 1;
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function area()
    {
        return $this->belongsTo(Area::class);
    }



}
