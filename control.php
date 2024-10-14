<?php 
//if else
/*
if(condition){
    // this code will execute if the condition is true
}else{
    // this will run if the condition will false.
}
*/

$i = 10;
if($i >= 5){
    echo "The value of i is Greater than 5";
}else{
    echo "Value of i is less than 5";
}

/*
$per 100 - 60 first division
$per 59 - 45 Second division
$per 44 - 33 Third division
$per 33 - 0  Fail

if ($per = P AND / OR / NOT )
if ($per = P && / || / ! )
*/
?>

<br />
<hr>
<?php 
$per = 70;
if($per >= 33 && $per < 45){
    echo "Third Div";
}
elseif($per >= 60 AND  $per <= 100){
    echo "First Div";
}
elseif($per >= 45 && $per < 60){
    echo "Second Div";
}
else{
    echo "Failed!";
}

echo "<br />";
$age = 10;


//Ternary Operator or Short Hand If Else
echo $age >= 18 ? "Elligible" : "Not-Elligible";

?>