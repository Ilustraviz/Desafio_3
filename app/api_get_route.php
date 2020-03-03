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






?>