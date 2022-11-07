<?php

namespace App\Assist\Controllers;

use App\Assist\Core\Controller;

class HomeController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->render('home/index', ['user' => 'Jostin']);
  }

  public function getDataJson()
  {
    echo json_encode(['name' => 'Jostin']);
  }
}
