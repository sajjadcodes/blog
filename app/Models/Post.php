<?php 

namespace App\Models;

class Post 
{
    public static function all() {

        $post = "This is post";
       return $post; 
    }

    public static function  find($slug) {

        

           if(!file_exists($path =resource_path("/Posts/{$slug}.html"))){

            // return redirect('/');
            throw new ModelNotFoundException();

           }

           return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }
}