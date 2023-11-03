<?php

class Home extends Controller
{
  public function index()
  {
    $this->getHeader($data);
    $this->view('home/index', $data);
    $this->getFooter();
  }
}
