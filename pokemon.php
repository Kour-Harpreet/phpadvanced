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
// The "name" property is public - so we can read and write from anywhere!
$pikachu->name = 'PikaPika';
echo $pikachu->name;
// The "level" property is private - so we can ONLY read and write from within the class' logic.
// $pikachu->level += 1;
// echo $pikachu->level;
$pikachu->levelUp();
echo $pikachu->getLevel();
?>

<?php include 'templates/footer.php';
