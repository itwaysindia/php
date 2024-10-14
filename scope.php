Scope of php Variable
1. local
2. global
3. static


<?php 
$a =10;
$c = 'Hello';
// $abc = 1;


function a(){
    $b = 20;
    global $a, $c;
    echo "<br />Inside Function a " . $a;
    echo $c;
    $c = 'Testing';
   
}
a();

echo "Value of c function : ". $c;
echo "<br />";
function b(){
   
    $GLOBALS['abc'] = $GLOBALS['a'];
    
}
b();
echo $abc;
echo "<hr>";

function sf(){
    static $s = 2;
    $s++;
    echo $s;
    echo "<br />";
}
sf();
sf();
sf();
sf();

echo "<hr />";

$var = "abc";

$$var = 10;
echo $var;
echo $$var . "<br />";
echo $abc;


?>