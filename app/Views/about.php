<?php ob_start(); ?>

<h1><?php echo $title; ?></h1>

<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/layout/master.php'; ?>