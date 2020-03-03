<?php

require '../configs/configs.php';
require './vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;




$c['notFoundHandler'] = function ($c) {
    /*$page = new Page();
    $page->setTpl("error404",[
        "nav"=>false
    ]);
    return function ($request, $response) use ($c) {
        return $response->withStatus(404);
    };*/
    echo "erro 404";
};

$c = new Slim\Container(SLIM_CONFIG);

$app = new Slim\App($c);


//Routes website
require './routes/website_route.php';

//Routes app
require './app/api_get_route.php';
require './app/api_post_route.php';

$app->run();

?>