<?php
require_once '../core/App.php';
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Create an instance of App (the entry point)
$app = new App();

$app->run();
