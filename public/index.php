<?php
    /**
     * @package myspace
     * 
     * MySpace est une application de gestion des profils 
     * specialement pour les etudiants d'esis test
     * 
     * @author Josh Muleshi <jmuleshi2@gmail.com>*/
    require '../vendor/autoload.php';

    use Route\Router;
    use Route\RouterException;

    $router = new Router();

    $router->show();

    $router->get('/', function (){ require '../views/home.php'; });
    $router->get('/posts', function (){ echo 'Les articles !'; });
    $router->get('/posts/:id', function ($id){ echo 'L\'articles ' . $id; });
    $router->post('/posts/:id', function ($id){ echo 'L\'articles ' . $id; });

    try {
        $router->run();
    } catch (RouterException $e) {
        echo $e->getMessage();
    }

