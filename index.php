<?php
global $title;
$title = 'PHP HOMEPAGE'; //$GLOBALS['title'] = 'PHP HOMEPAGE'
include 'templates/header.php';
?>
<h1> <?php echo $GLOBALS['title']; ?> <h1>

        <?php include 'templates/navigation.php'; ?>

        <?php include 'templates/footer.php'; ?>
