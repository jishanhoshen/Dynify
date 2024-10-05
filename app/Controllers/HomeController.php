<?php

class HomeController
{
  public function index()
  {
    View::render('home', ['title' => $_ENV['APP_NAME'], 'message' => 'Welcome to the homepage!']);
  }
}
