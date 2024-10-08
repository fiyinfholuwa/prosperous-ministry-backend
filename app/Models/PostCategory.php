<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostCategory extends Model
{
    use HasFactory;

    protected  $guarded = ['id'];
    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class, 'post_category_id');
    }
}