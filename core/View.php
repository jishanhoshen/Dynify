<?php

class View
{
  public static function render($view, $data = [])
  {
    extract($data); // Extract data array into variables
    require "./app/Views/$view.php"; // Include the view file
  }
}
