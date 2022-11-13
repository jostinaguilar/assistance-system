<?php

namespace App\Assist\Core;

class View
{
  public function render(
    string $view,
    array $data = []
  ) {
    $this->data = $data;
    require_once __DIR__ . "./../$view.php";
  }
}
