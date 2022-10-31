<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */

class Category extends Model
{
    protected $fillable = ['id', 'name', 'created_at', 'updated_at'];

    public function posts(){
        return $this->hasMany('App\Models\Post');
//        return $this->hasMany(Post::class);
    }
}
