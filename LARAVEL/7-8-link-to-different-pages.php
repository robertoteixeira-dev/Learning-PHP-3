<?php

/*
Folde: Routes
        web.php

# WE ALREADY HAVE ONE BASE ROUTE
Route::get('/', function () {
    return view('posts');
});


# HOW TO WRITE A NEW ROUTE
Route::get('post', function () {
    return view('post');
});

- On my html I can put a href="/post" for example to follow the route

- Now we can create post.blade.php that is the html the has one single post
On this I could also create a href="/posts" to go back to the home page

### VIDEO 8 
But now we only learned how to go to one post, we need to
know how to store blog posts as html files to go to each post

I can create a folder called posts and create there
    my-first-post.html 
    my-second-post.html etc...

On the route:
    We have to make it dynamic 
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
});

And, on the posts.blade.php change the href= to href="posts/my-first-post" etc

This is good, but it could be better using constraints -> VIDEO 9


*/

