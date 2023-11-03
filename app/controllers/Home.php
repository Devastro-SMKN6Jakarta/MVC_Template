<?php

class Home extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Home Page'
    ];
    $this->getHeader($data);
    $this->view('home/index', $data);
    $this->getFooter();
  }
}
