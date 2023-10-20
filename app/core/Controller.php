<?php

class Controller
{
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }

  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }

  public function getHeader($data = [])
  {
    require_once '../app/views/templates/header.php';
  }

  public function getFooter($data = [])
  {
    require_once '../app/views/templates/footer.php';
  }
}
