<?php

/*
Other way to create a post

Post::create(['title' => 'My post', 'excerpt' => ....]);
    But now It will shows an exception
        Go to your post model and add 
            protected $fillable = ['title'];
                this fillable properties specifies which attributes can be mass assignment whch means when we passt like this up there 
            protected $fillale = ['title', 'excerpt', 'date'];
                Defination of mass assignment vulnerabilities
            protected $guarded = ['id']
                Isso faz ao contratio de fillable
*/
