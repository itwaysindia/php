<?php 
/*Arrays
1. Indexed Arrays */

$alphabets = ['a', 'b', 'c', 'd'];
print_r($alphabets);

$vovels = array('a', 'e', 'i', 'o', 'u');
print_r($vovels);
echo "<br />";
echo $vovels[2];


$alphabets[] = 'e';
$alphabets[] = 'h';
$alphabets[2] = 'f';

print_r($alphabets);

foreach($alphabets as $a){
    echo $a ."<br />";
}


// Associative Arrays
$stu = array(
    "name" => "ABC",
    "age" => "20",
    "city" => "Lucknow"
);
print_r($stu);
echo $stu['age'];
$stu['age'] = 25;
echo $stu['age'];
echo "<br />";
foreach($stu as $key => $value){
    echo $key . ": $value <br />";
}




// Multidiamensional Arrays
    //2d Array 
//name, age, class
    $students = array(
        array("Peter", 20, "12"), //0
        array("Ram", 16, "12"), //1
        array("Shyam", 17, "11") //2
    );

   echo $students[1][0];
   echo $students[1][1];
   echo $students[1][2];
echo "<hr />";
   foreach($students as $student){
        foreach($student as $sd){
            echo $sd . "\t";
        }
        echo "<br />";

   }
echo "<pre>";
print_r($students);



//associative Multidimensional Array


$students = array(
    "Ram" => array("age"=>22, "grade" => "A"),
    "Shyam" => array("age"=>24, "grade" => "C"),
    "Mohan" => array("age"=>26, "grade" => "B")
);
echo "<pre>";
print_r($students);


// Array Functions (Important)

//count
echo count($students['Ram']);

// array_merge()
$num1 = [1,2,3,4];
$num2 = [5,6,7,8];
$m = array_merge($num1, $num2);
print_r($m);


// array_keys() and array_values()

$keys = array_keys($stu);
print_r($keys);
$val = array_values($stu);
print_r($val);



//in_array()
$search = "Gorakhpur";
$city =["Lucknow", "Kanpur", "Barabanki", "Pryagraj", "Gorakhpur","Agra"];
if(in_array($search, $city)){
    echo "$search is in the array.";
}else{
    echo "$search is Not Found!";
}


// array_search()
$c = array_search($search, $city);
echo $c;

/*
-range()
-count()
-sizeof()
-array_count_values()
-array_key_exists()
-in_array()
-array_search()
-array_keys()
-array_values()
-array_flip()

----- manupulation functions ---
-array_push()
-array_pop()
-array_shift()
-array_unshift()
-array_splice()
-array_slice()

---- array sorting functions
sort() // sorts an array in asc order
rsort() // desc order

asort() // ASC to associative array
arsort() // DESC order works on associative array
ksort() // short associative array by key in ascending order.
krsort() // short by DESC for key in associative array

*/

//range
$num = range(1, 10);
print_r($num);

// sizeof()
echo sizeof($num);




echo "<br />";
//array_count_values()
$arr = array("red", "black", "blue", "white", "black");
print_r(array_count_values($arr));



//array_key_exists()

$color = array(
    "ab"=>"red",
    "b" => "black",
    "c" => "white" );
if(array_key_exists("ab", $color)){
    echo "Key exists!";
}else{
    echo "Not Found!";
}


// array_search()
$p = array_search("black", $arr);
echo $p;
$k = array_search("red", $color);
echo $k;


//array_flip()

$f = array_flip($arr);
print_r($f);


sort($arr);
print_r($arr);

rsort($arr);
print_r($arr);

// rsort($color);
// print_r($color);



asort($color);
print_r($color);



?>