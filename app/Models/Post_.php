<?php

namespace App\Models;

class Post 
{
    static $blog_post= 
    [
    [

        
        "title" => "Judul",
        "slug" => "judul",
        "auth" => "Mynameis",
        "body" => "First",
        ],
        [
            "title" => "Second",
            "slug" => "second",
            "auth" => "Mynameis22",
            "body" => "Second",
        ],
    ];
    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts-> firstwhere('slug',$slug);
return $post;
    }
}
