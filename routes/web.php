<?php

use App\MOdels\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    // $posts = Post::all();
    return view("posts", [
        'posts' => 'working fine'
    ]);
});

Route::get('posts/{post}', function($slug){

    // Find a post by its slug and pass it to a view called "Post"

    $post = Post::find($slug);
    return view('post', [
        'post' => $post
    ] );
    
    // $path = __DIR__."/../resources/posts/{$slug}.html";

    // if( ! file_exists($path)) {

    //     dd("file does not exist");
    //     return redirect('/');
    // }

    // $post = cache()->remember("posts.{$slug}",5, function() use ($path) {
    //     var_dump("file_get_contents");
    //     $post = file_get_contents($path);

    // } );

    
    // return view("posts",[
    //     'post' => $post,
    // ]);
})->where('post', '[A-z_\-]+');
// Route::get('posts/{post}', function ($slug) {
//     // return $slug;
//     $path = __DIR__ . "/../resources/posts/{$slug}.html";
//     if(!file_exists($path)){
//         //dum and die we have also ddd() dump die and debug. For quick debugging
//         // dd("File does not exist");
//         // we can also 404
//         // abort(404);
//         //another option is redirect
//         return redirect('/');

//     }

//     $post = file_get_contents($path);
//     return view('', [
//         'post' => $post,
//     ]);
// });
