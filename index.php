<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Printing Hello 
    echo "<h1>Hello!</h1>";

    /*
    Declaring Variables
    and printing
    */

    $color = "Blue";


    ?>

<div class="btn btn-button primary">
    <?= $color; ?>

</div> 

<?php
// adding two values
$value1 = 10;
$value2 = 40;

$add = $value1+$value2;
echo $add;
echo "<br />";
echo 20+50;
echo "<br />";
?>
echo 20+50;

<?= $add . ", " .$color; ?>

</body>
</html>