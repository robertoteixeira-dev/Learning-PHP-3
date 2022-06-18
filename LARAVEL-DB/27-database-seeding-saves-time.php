<?php

/*
seeders 
    \App\Models\User::factory(10)->create(); - VAI CRIAR  10 USUÁRIOS

    NO FACTORY -> AS INFORMAÇÕES DO USUÁRIO E QUANTIDADES DE USUÁRIOS
    NO SEEDERS -> APLICAMOS PRA CRIAR TODOS OS USUÁRIO

    TO RUN SEED
        php artisan - para ver todos os comandos
        db:seed- seed the database with records - USA ESSE
            php artisan db:seed - ISSO VAI CRIAR TODOS OS USUÁRIOS 

            PESQUISE SOBRE AS CATEGORIAS COM SEED

            php artisan migrate:fresh --seed - apaga tudo, refaz e preenche o seed novamente

            NO SEU SEED PUT THE TRUNCATE
                Category::truncate();
                User::truncate();


    PRA FAZER ORDERS E LINE-ITEMS

    $user = User::factoru()->create();

    $personal = Category::create([
        'name' => 'Personal
    ]);

    Post::create([
        'user_id' => $user->id;
    ])



SOBRE RELAÇÕES - UMA ORDEM BELONGS TO A CUSTOMER

public function user(){
    retrn $this->belongsTo(User::class)
}

JA NO MODEL DE CUSTOMER 
public function posts(){
    return $this->hasMany(Post::class);
}
*/
