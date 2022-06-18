<?php

/*
MAKE RELATIONSHIPS SO WE CAN FOR EXAMPLE FILTER EVERY POST IN THAT CATEGORY
    - php artisan make:migration create_categories_tables
    - php artisan make:model
        BUT WE CAN JOIN THIS TWO 
            - php artisan help make:model - put this to see the options

            - exemplo: php artisan make:model Category -m - isso vai fazer o model e tbm uma migration
                Em app/models/aqui teremos o model que criamos Category.php

                Em database/migration/ aqui teremos a migration onde colocamos as tables que queremos exemplo 
                $table->id()->unique(); 
                $table->timestamps();
                $table->foreignId('category_id'); - fazendo uma foreign key

                OJO!! quando terminar, faz php artisan migrate:fresh que vai deletar todas e começar do zero (SOMENTE SE FOR CRIAR DE UMA VEZ!!!!)

            PARA ADICIONAR OS ROWS (ELEMENTOS)
                Podemos fazer manualmente com php artidan tinker, mas o desafio quer automatico
                Fazenndo manualmente, podemos usar o:
                    Post::create([
                        'title' => 'My post',
                            E assim ir preenchendo e aqui mesmo fazer o fereign key colocando
                        'category_id' => 1 - aqui estamos dizendo que esse esta relacionado com o post que tem id 1
                    ]) - por exemplo agora poderiamos fazer select * from posts where category_id = 1;
                Para colocar a categoria de maneira eficiente temos que ir no model
                        public function category(){
                            return $this->belongsTo(Category::class); - THIS IS A ELOQUENT RELATIONSHIP
                        }
                            Agora no terminal eu posso fazer $post->category; 
            



*/

