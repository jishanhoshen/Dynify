<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? htmlspecialchars($title) : 'Default Title'; ?></title>
  <link rel="shortcut icon" href="storage/images/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="public/dist/css/style.css">
  <link rel="stylesheet" href="public/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include __DIR__ . '/preloader.php'; ?>
  <?php include __DIR__ . '/navbar.php'; ?>