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

  public function isLogin()
  {
    if (!isset($_SESSION['login'])) {
      header('Location: ' . BASEURL . '/auth');
      exit;
    }
  }

  public function isNotLogin()
  {
    if (isset($_SESSION['login'])) {
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }

  public function isAdmin()
  {
    if ($_SESSION['role'] != 'admin') {
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }
}
