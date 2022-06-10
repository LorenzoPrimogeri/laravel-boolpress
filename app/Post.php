<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'category_id', 'img'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public static function slugCreate($title)
    {
        $altslug = Str::slug($title);
        $found = Post::where('slug', $altslug)->first();
        $count = 1;
        $slug = $altslug;
        while ($found) {
            $slug = $altslug . '_' . $count;
            $count++;
            $found = Post::where('slug', $slug)->first();
        }
        return $slug;
    }
}
