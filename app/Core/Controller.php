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
}
