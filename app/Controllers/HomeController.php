<?php

class HomeController
{
  public function index()
  {
    View::render('home', ['title' => $_ENV['COMPANY_NAME'], 'message' => 'Welcome to the homepage!']);
  }
}
