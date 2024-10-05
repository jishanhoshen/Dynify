<?php

require_once 'Router.php';

class App
{
  public function run()
  {
    $uri = trim($_SERVER['REQUEST_URI'], '/'); // Get the current URL
    Router::dispatch($uri); // Send the URL to the Router
  }
}
