<?php

namespace Route;

class Router
{
    private $url;
    private array $routes;

    public function __construct(){
        $this->url = $this->currentUrl();
    }

    public function show()
    {
        echo $this->url;
    }

    /**
     * Getting current url
     *
     * @return string
     */
    public function currentUrl(): string
    {
        return $this->sanitize($_SERVER['REQUEST_URI']);
    }

    /**
     * get Url Without Query String and sanitized
     *
     * @param string $url
     * @return string
     */
    private function sanitize(string $url): string
    {
        $urlSanitized = explode('?', $url);
        $urlSanitized = is_array($urlSanitized) ? $urlSanitized[0] : $urlSanitized;

        return trim($urlSanitized, '/');
    }

    public function get($path, $callable): void
    {
        $route = new Route($path, $callable);
        $this->routes['GET'][] = $route;
    }

    public function post($path, $callable): void
    {
        $route = new Route($path, $callable);
        $this->routes['POST'][] = $route;
    }

    /**
     * @throws RouterException
     */
    public function run()
    {
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            throw new RouterException('REQUEST_METHOD does not exist');
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if ($route->match($this->url)){
                return $route->call();
            }
        }
        throw new RouterException('Not routes matches');
    }
}