<?php

@$num = $_POST['select'];

switch ($num){
    case "1": echo "You entered number 1";
    break;
    case "2": echo "You entered number 2";
    break;
    case "3": echo "You entered number 3";
    break;
    case "4": echo "You entered number 4";
    break;
    case "5": echo "You entered number 5";
    break;
default: echo "Please Enter the number between 1 to 5";

}
?>
<form action="" method="POST">
<input type="text" name="select" placeholder="Enter Value between 1 to 5">
<input type="submit">
</form>



<?php

@$v = $_POST['vehicle'];

switch ($v){
    case "Car": echo "you are selected four wheels";
    break;
    case "auto": echo "You selected three wheels";
    break;
    case "bike": echo "You selected 2 wheels";
    break;
    case "steamer": echo "You selected water vehicle";
    break;
    case "air": echo "You selected flight";
    break;
default: echo "Please Enter the type of vehicle (car, auto, bike, steamer, air)";

}
?>
<form action="" method="POST">
<input type="text" name="vehicle" placeholder="Enter Value between 1 to 5">
<input type="submit">
</form>