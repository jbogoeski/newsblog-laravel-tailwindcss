<?php

namespace App\Models;

use App\Models\Area;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubArea extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

}
