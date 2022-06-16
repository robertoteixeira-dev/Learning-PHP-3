<?php

/*

Route::get('posts/{post}', function ($slug) {
    
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if(! file_exist($path)){

        # Options:
        dd('File does not exist');
        ddd('File does not exist');
        abort(404);
        return redirect('/');
    }

    $post => file_get_contents($path);
        
    return view('post', [
        'post' => $post
    
    ]);
})->where('post', '[A-z_\-]+');
    existem varios tipos de where, como whereNumber, whereAlpha
*/

