<?php

/*
# MVC
    Model View Controller. It represents the architecture
    that separates the data and business logic from the
    preseentation layer.


    Laravel imprement MVC Pattern

    MVC é a divisão das responsabilidades da nossa aplicação
    em tres partes. 
        Model é responsável por gerenciar as 
    regras de negócio, manipular dados, gerenciar as conexões
    com o banco de dados, ou seja, tudo que está relacionado
    com obtenção ou persistencia de dados da nossa aplicação. 
        View é a parte externa do nosso projeto, é tudo que 
        o usuário vai ver. Exemplo: página HTML
        Controller é responsável por fazer uma ponte entre
        os dados obtidos no model e a exibição desses dados
        na view. É por meio dele que as requisições são
        processadas e cada ação é executada dentro da model. 







    Rename the folter to: Controllers
        HomeController.php
        InvoicesController.php


EM PORTUGUES

1 - Request Clients -> Controller (View.clients)

Esse controler manda e recebe para o Model e para View

Model - Get Client Data (SELECT * FROM clients;)

View - Get Client View (JSON ou HTML ou qualquer outra representação do modelo)

Apos isso, o controller manda a response pro cliente


# OS ARQUIVOS QUE PRECISO

## Model.php 
    class Model {
        public $string;

        public function __construct(){
            $this->string = "Welcome":
        }

        public function get_string(){
            return $this->string;
        }
    }

## View.php
    class View{
        public function render($sting){
            echo $string;
        }
    }

## Controller.php

require "View.php";
require "Model.php";

class Controller {
    public function index(){
        $model = new Model();
        $view = new View();
        $string = $model->get_string();
        $view->render($string);
    }
}

## index.php

include "Controller.php";
$controller = new Controller();

$controller->index();

*/




