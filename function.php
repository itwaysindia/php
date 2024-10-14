

<?php 


function fname(){
    return "This is Function";
}


 $fun = fname();
 echo $fun;


 function greet($name, $age){
    echo "Hello ", $name . $age;
 }

 greet("XYZ", 20);
$v =10;



// Function with default paramater
function welcome($name, $msg="Namaste"){
    return  "$msg, $name!";
}

echo "<br />";
echo welcome("XYZ", "Good Morning");



// Recursion

// function recFun($param){
//     if(base case condition){
//         // stop recursion
//         return result
//     }else{
//         // recursive case
//         return recFun(smaller parameter)
//     }
// }


function factorial($n){
    if($n == 1){
        return 1;
    }else{
        
        return $n * factorial($n-1);
    }
}

echo "<br /><br /><b>Factorial: </b>". factorial(5);


echo "<br />";
echo "<br />";
echo "<br />";
$var = 21;

$var = NULL;
//isset();
//empty();
//is_array();

if(isset($var)){
    echo "OK. Value Found!";
}else{
    echo "Variable is empty";
}
echo "<br />";
if(!empty($var)){
    echo "Variable value is empty";
}else{
    echo "Variable is not empty";
}

echo "<br />";
$arr = ['1', '2', '3', '4'];

if(is_array($arr)){
    echo "It's an array!";
}else{
    
    echo "It's not an array!";
}



echo "<br />";



// file_get_contents();
$cont = file_get_contents("test.txt");
// echo $cont; 

//file_put_contents()
// $nCont = $cont . "<br />" . "This is new ";
// file_put_contents("test.txt", $nCont);


echo "<br />";
// md5() generate MD5 hash
$v = "abc@##$444asd";
echo md5($v);



//implode
//explode
echo "<br />";
$arry = array('abc.xyz', 'xyz.abc', 'ijk.a', 'n.b');

print_r($arry);
$str = implode(", ", $arry);
echo $str;



$ar = explode(".", $str);
echo "<br />";
print_r($ar);
?>
