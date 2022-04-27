<?php
    /**
     * @package myspace
     * 
     * MySpace est une application de gestion des profils 
     * specialement pour les etudiants d'esis test
     * 
     * @author Josh Muleshi <jmuleshi2@gmail.com>
     */

    require '../vendor/autoload.php';

    $uri = $_SERVER['REQUEST_URI'];
    $router = new AltoRouter();

    $router->map(
        'GET', '/', function () {
            require '../src/View/home.php';
        }
    );
    $router->map(
        'GET', '/home', function () {
            require '../src/View/home.php';
        },
        'home'
    );

    $match = $router->match();

    // call closure or throw 404 status
    if (is_array($match) && is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        // no route was matched
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    }
