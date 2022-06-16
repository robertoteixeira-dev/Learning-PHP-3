<?php

/*
ADDING THE CACHE ON THE ROUTE

Route::get('posts/{post}', function ($slug) {
    
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if(! file_exist($path)){

        # Options:
        dd('File does not exist');
        ddd('File does not exist');
        abort(404);
        return redirect('/');
    }

    $post = cache()->remember("posts.{$slug}", 5, function () use ($path) {
        return file_get_contents($path);
    })

    //on the 5 seconds, we could put 3600 seconds, or we could use now()->addMinutes(20)
    // on function we could put $post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    //We could also pas the path on the if
    

    return view('post', [
        'post' => $post
    
    ]);
})->where('post', '[A-z_\-]+');


NOW WE CAN MAKE THE POSTS MORE DYNAMIC AS WELL -> VIDEO 11

*/