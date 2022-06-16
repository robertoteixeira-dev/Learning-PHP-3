<?php

/*
yaml-front-matter php 

INSTALL
    composer require spatie/yaml-front-matter

## Routes 
Route::get('/', function () {
    $posts = collect(File::files(resource_path("posts")))
    ->map(function ($file => YamlFrontMatter::parseFile($file))

    ->map(function ($document) => new Post(
        $document->title,
        $document->excerpt,
        $document->date,
        $document->body(),
        $document->slug
    ));

    
    OUTRA OPÇÃO
    
    $posts = collect(File::files(resource_path("posts")))
    ->map(function ($file){
        return YamlFrontMatter::parseFile($file);
    });
    
    ->map(function ($document) {
        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    })
    
    OUTRA OPÇÃO
    
    $files = File::files(resource_path("posts"));

    $posts = array_map(function ($file) {
        $document = YamlFrontMatter::parseFile($file);

        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }, $files);
    
    return view('posts', [
        'posts' => $posts
    ]);

});


### MODELS
    Create a class Post

    namespace App\Models;

    class Post {

        public $title;
        public $excerpt;
        public $date;
        public $body;
        public $slug;

        public function __construct($title, $excerpt, $date, $body, $slug){
            $this->title = $title;
            $this->excerpt = $excerpt;
            $this->date = $date;
            $this->body = $body;
            $this->slug = $slug;
        }

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
});


### ON POSTS.BLADE.PHP 

<body>
<?php foreach ($posts as $post) : ?>
    <article>
        <h1>
            <a href="/posts/<?php $post->slug; ?>">
                <?php $Post->title; ?>
            </a>
            
        </h1>

        <div>
            <?php $post->excerpt; ?>
        </div>
    </article>

    <?php endforeach; ?>



#### DEFINITION OF COLLECTIONS IN LARAVEL

*/




