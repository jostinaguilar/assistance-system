<?php

namespace App\Assist\Core;

class Route
{
  private array $routes;
  private bool $matchPath = false;
  private string $url;

  public function get($path, callable $callback)
  {
    $this->routes[] = [
      'path' => $path,
      'fn' => $callback
    ];
  }

  public function post($path)
  {
    $this->paths[$path] = [$path];
  }

  public function run()
  {
    $this->url = $_SERVER['REQUEST_URI'];

    foreach ($this->routes as $route) {
      if ($this->url === $route['path']) {
        call_user_func($route['fn']);
        $this->matchPath = true;
        return;
      }
    }

    if ($this->matchPath === false) {
      require_once __DIR__ . "/../Errors/404.php";
    }
  }
}
