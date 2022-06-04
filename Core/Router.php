<?php


class Route {
  protected $routes = [
    "GET" => [],
    "POST" => []
  ];
  public static function load($filename) {
    $route = new Route;
    require($filename);
    return $route;
  }
  public function get($uri, $controller) {
    $this->routes['GET'][$uri] = $controller;
  }
  public function post($uri, $controller) {
    $this->routes['POST'][$uri] = $controller;
  }
  public function register($routes) {
    $this->routes = $routes;
  }
  public function driect($uri, $method) {
    if(!array_key_exists($uri, $this->routes[$method])) {
      die("404 page");
    } 
    $explosion = explode('@', $this->routes[$method][$uri]);
    $this->callToAction($explosion[0], $explosion[1]);
  }
  public function callToAction ($class, $method) {
    $class = new $class;
    $class->$method();
  }
  
}