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
// print_r($_POST);

// echo $age;
if(isset($_POST['age'])){
    $age = $_POST['age'];

if($age >= 18){
    echo "You are elligible for DL";
}elseif($age <= 18){
    echo "You are Not elligible for DL";

}
}
?>
<form action="" method="POST">
    <input type="text" name="age" placeholder="Enter Your Age">
    <br />
    <input type="submit" name="submit" Value="Check Elligibility">
</form>
    
</body>
</html>