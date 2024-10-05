<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? htmlspecialchars($title) : 'Default Title'; ?></title>
  <link rel="stylesheet" href="/dist/style.css"> <!-- Include your CSS -->
</head>

<body>
  <header>
    <h1>My Website Header</h1>
    <nav>
      <ul>
        <li><a href="/">home</a></li>
        <li><a href="/about">About</a></li>
      </ul>
    </nav>
  </header>