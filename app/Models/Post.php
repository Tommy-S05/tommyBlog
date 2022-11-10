<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

/**
 * @mixin Builder
 */

class Post extends Model
{
    protected $fillable = ['id', 'category_id', 'title', 'content', 'author', 'featured', 'created_at', 'updated_at'];
    public function category(){
//        return $this->belongsTo('App\Models\Category');
        return $this->belongsTo(Category::class);
    }

    public static function getAllPosts(){
        $datas = DB::table('posts')
            ->join('categories', 'posts.category_id', "=", "categories.id")
            ->select('posts.*', 'categories.name')
            ->orderBy('posts.id')
            ->get();

        return $datas;
    }
}
