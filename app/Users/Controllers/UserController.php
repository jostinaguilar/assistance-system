<?php

namespace App\Assist\Users\Controllers;

use App\Assist\Core\Controller;

class UserController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function auth()
  {
    # code...
  }

  public function register()
  {
    echo $this->post('name');
    $this->redirect('/');
  }
}
