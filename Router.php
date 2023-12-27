<?php
class Router {

  private $routes = [];

  public function get($path, $controller) {
    $this->routes[] = [
      'method' => 'GET',
      'uri' => $path,
      'controller' => $controller
    ];
  }
  public function post($path, $controller) {
    $this->routes[] = [
      'method' => 'POST',
      'uri' => $path,
      'controller' => $controller
    ];
  }
  public function route($uri, $method) {
    $isFound = false;
    foreach ($this->routes as $route) {

      if ("/MOVIESPROJ/public" . $route['uri'] == $uri && $route['method'] == $method) {
        $isFound = true;
        require rootPath($route['controller']);
        exit;
      } else {
        $isFound = false;
      }
    }
    if (!$isFound) {
      require '../error/404.php';
    }
  }
}
