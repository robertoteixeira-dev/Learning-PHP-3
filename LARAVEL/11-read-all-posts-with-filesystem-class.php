<?php

/*


Find a post by its slug and pass it to a view called "post"

use App\Models\Post;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {

    return view('post', [
        'post' => Post::find($slug)
    ]);
    
})->where('post', '[A-z_\-]+');



### MODELS
    Create a class Post

    namespace App\Models;

    class Post {
        public static function all(){
            $files = File::files(resource_path("posts/"));

            return array_map(fn($file) => $file->getContents(), $files);
        }

        public static function finde($slug){

            base_path();
            if(! file_exist($path = resource_path("posts/{$slug}.html"))) {  
                throw new ModelNotFoundException();
            }

            return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
        }
    }


### ON MY POSTS.BLADE.PHP 
<body>
<?php foreach ($posts as $Post) : ?>
    <article>
        <?= $post; ?>
    </article>
<?php endforeach; ?>


### ON MY my-first-post.html 

---
title: My First Post
slug: my-first-post
excerpt: Lorem ipsum...
date: 2022-06-16
---

<p> 
    Loremipsum ...
</p>

*/



