<?php 
//while loop
echo "While Loop<hr>";
$i =1;
while ($i <= 5){
    echo $i;
    echo "<br />";
    $i++;
}


// do while
echo "Do While Loop<hr>";
$j = 1;
do{
    echo $j;
    echo "<br />";
    $j++;
}while($j<=5);



//for loop
echo "For Loop<hr>";

for($k =1; $k<=5; $k++){
    if($k == 3){
        continue;
    }
    echo $k;
    echo "<br />";
}


//foreach loop
echo "<b>Foreach Loop</b><hr>";
$v = array("Car", "Bike", "Auto", "Cycle");

//  print_r($v);
foreach($v as $ve){
    echo "$ve <br />";
}
