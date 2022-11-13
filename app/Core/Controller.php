<?php

namespace App\Assist\Core;

class Controller
{

  private View $view;

  public function __construct()
  {
    $this->view = new View();
  }

  public function render(string $view, array $data = [])
  {
    $this->view->render($view, $data);
  }

  public function post($name)
  {
    return $_POST[$name];
  }

  public function get($name)
  {
    return $_GET[$name];
  }

  public function redirect($path)
  {
    return header("Location: $path");
  }
}
