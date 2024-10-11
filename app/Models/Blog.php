<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];

    public function category_info()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }
}
