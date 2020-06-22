<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Models\Page;
use Source\Sql\Models\User;
use Source\Sql\Models\Vaga;
use Source\Sql\Models\Empresa;
use Source\Sql\Sql;

$app->get('/api/usuarios', function (Request $request, Response $response, array $args) use ($app) {

    $sql = new Sql();

    $return = $sql->select(""); //Escreva a query entre as aspas

    
    echo json_encode([]);
    
});
$app->get('/api/createtable', function (Request $request, Response $response, array $args) use ($app) {

    $sql = new Sql();

    if(count($sql->select("SELECT id FROM users ORDER BY id LIMIT 1")) == 0)
    {
        $sql->select("create table if not exists users (
            id INT auto_increment primary key,
            name VARCHAR(255) NOT NULL
        )");
        
        
        $sql->select("create table if not exists phones (
            id INT auto_increment primary key,
            phone VARCHAR(15) NOT NULL,
            id_user INT NOT NULL
            )");
        
        
        $sql->select("INSERT INTO users(name) VALUES('Kauan Pereira Rocha')");
        $sql->select("INSERT INTO users(name) VALUES('Antônio Oliveira Cunha')");
        $sql->select("INSERT INTO users(name) VALUES('Paulo Ferreira Sousa')");
        $sql->select("INSERT INTO users(name) VALUES('Beatrice Silva Gomes')");
        $sql->select("INSERT INTO users(name) VALUES('Gabriela Oliveira Sousa')");
        $sql->select("INSERT INTO users(name) VALUES('Alex Oliveira Correia')");
        $sql->select("INSERT INTO users(name) VALUES('Breno Azevedo Martins')");
        $sql->select("INSERT INTO users(name) VALUES('Giovanna Rocha Barros')");
        $sql->select("INSERT INTO users(name) VALUES('Daniel Sousa Carvalho')");
        $sql->select("INSERT INTO users(name) VALUES('Luis Rodrigues Barros')");
        $sql->select("INSERT INTO users(name) VALUES('Felipe Fernandes Almeida')");
        $sql->select("INSERT INTO users(name) VALUES('Lavinia Ribeiro Ferreira')");
        $sql->select("INSERT INTO users(name) VALUES('Danilo Araujo Costa')");
        $sql->select("INSERT INTO users(name) VALUES('Leila Fernandes Cunha')");
        $sql->select("INSERT INTO users(name) VALUES('Livia Silva Ribeiro')");
        
        
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(22) 86093-3954',1)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(45) 49821-3210',2)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(36) 76792-9280',3)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(47) 02143-6778',6)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(60) 85886-3169',5)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(14) 82379-1058',6)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(06) 73923-3503',7)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(34) 91282-4302',8)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(97) 60666-4601',9)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(39) 50858-6636',10)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(97) 98822-0797',11)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(41) 18803-0293',12)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(51) 51121-9457',14)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(47) 75048-4667',8)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(56) 97568-8661',8)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(19) 37181-8795',1)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(35) 05525-3778',2)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(23) 58726-4902',10)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(62) 29844-9946',8)");
        $sql->select("INSERT INTO phones(phone,id_user) VALUES('(19) 64587-6852',8)");

        echo "ok";
    }
    else
    {
        echo "Já existe";
    }
    
});






?>