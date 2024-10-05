<?php

class HomeController
{
  public function index()
  {
    View::render('home', ['title' => 'Home Page', 'message' => 'Welcome to the homepage!']);
  }

}
