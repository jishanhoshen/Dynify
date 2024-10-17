<?php

class HomeController
{
  public function index()
  {
    View::render('home', ['title' => $_ENV['COMPANY_NAME'] . ' | Cut, Core & Drill
with Confidence', 'message' => 'Welcome to the homepage!']);
  }
}
