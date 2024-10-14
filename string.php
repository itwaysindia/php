<?php 
$var = 10;
echo '$var';
echo "$var";


// string Interpolation
$name = 'ABC';
$message = "<br />Hello, $name";
echo $message;

// String Concatenation
echo "<br />";
$fname = "ABC";
$lname = "XYZ";
$fullName = $fname .' '. $lname;
echo $fullName;

// Common String Functions

// Return length of a string
echo "<br />";
echo strlen($fullName);


$msg = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, accusantium reiciendis fugit corporis ad accusamus deleniti quam similique harum quos eos exercitationem vero enim inventore optio nihil dolorem natus, quidem saepe distinctio. Soluta architecto magnam, earum laborum reiciendis aliquam ipsa ab alias harum adipisci, autem optio. Nemo beatae et delectus?";
/* 
strtolower() and strtoupper()
ucfirst()
ucwords()
trim()
substr()
strpos()
str_replace()
*/

echo "<br /> Converting in Lower Case<br />";
echo strtolower($msg);
echo "<br /> Converting in UPPER Case<br />";
echo strtoupper($msg);
echo "<br /> Converting in First charecter in uppercase<br />";
echo ucfirst($msg);
echo "<br /> Converting in every words first character in upper case<br />";
echo ucwords($msg);

echo "<pre><br /> trim<br />";
$msg = "     Hello!  ";
echo trim($msg);


echo "<pre><br /> SUBSTR<br />";
$msg = "Hello, World!";
echo substr($msg, 7, 5);

echo "<pre><br /> strpos<br />";
$msg = "Hello, World!";
echo strpos($msg, "World");

echo "<pre><br /> str_replace<br />";
$msg = "Hello, World!";
echo str_replace("Hello", "Namaste", $msg);



/*
\n : New Line
\t : Tab
\\ : Backslash
\$ : Dollar Sign
*/

echo "Hello\'s \n";
echo "Hello! \"This is \t PHP\" \\ $ ";


//Heredoc Syntax

//Nowdoc

$text = <<<'EOD'
This is Heredoc line.
This is next line.
This is old vairble of msg $msg
EOD;

echo $text;

?>
