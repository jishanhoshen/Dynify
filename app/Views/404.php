<?php ob_start(); ?>

<section class="404 d-flex justify-content-center align-items-center flex-column" style="height: 100vh;">
  <h1>404 - Page Not Found</h1>
  <p>Sorry, the page you are looking for doesn't exist.</p>
  <a href="/" class="customButton">Go Back</a>
</section>


<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/layout/master.php'; ?>