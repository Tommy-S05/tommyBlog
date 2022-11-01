<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */

class Post extends Model
{
    protected $fillable = ['id', 'category_id', 'title', 'content', 'author', 'created_at', 'updated_at'];
    public function category(){
//        return $this->belongsTo('App\Models\Category');
        return $this->belongsTo(Category::class);
    }
}
