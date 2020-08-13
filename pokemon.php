<?php
include 'includes/Pokemon.Class.php';
global $title;
$title = 'PHP Classes (Pokemon)';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php include 'templates/navigation.php'; ?>

  <h2>Test Pokemon Output</h2>

  <?php
    $pikachu = new Pokemon();
    $pikachu->name = 'PikaPika';
    echo $pikachu->name;
    $pikachu->level += 1;
    echo $pikachu->level;
  ?>

<?php include 'templates/footer.php'; 