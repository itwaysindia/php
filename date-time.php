<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="assets/fa/css/all.min.css" rel="stylesheet">
    <link href="assets/css/my-style.css" rel="stylesheet">
   
</head>
<body>

<?php include('nav.php'); 
//date();
    //d: Day of the month (01 to 31)
    //D: Mon, Tue..
    //m: month (01-12)
    //Y: 2024, y: 24
    //H: Hour (00 - 23)
    //h: hours (0-12)
    //i: Minutes (00 - 59)
    //s: Seconds (00 - 59)
    //l: Day of the week ie Friday
//time();
//mktime();
    // mktime(int $hour = 0, $minute, $second, $month, $day, $year)
//strtotime();
    
//date()
    echo date('d/m/y');
echo "<br />";

//time
echo time();

//mktime
echo "<br />";
    $timestamp = mktime(12, 30, 0, 10, 4, 2024);
    echo $timestamp;
    echo "<br />";
    echo date("d-m-Y H:i:s", $timestamp);

    echo "<br />";
    $edate = "2024-12-25";
    echo "----". $ts = strtotime($edate);
    echo date("i", $ts);



// getdate();
echo "<br /><pre>";
$arr = getdate();
print_r($arr);
echo "<br />". $arr['yday'];


echo "<br />";
//checkdate()
if(checkdate(2, 30, 2024)){
    echo "Date is Valid";
}else{
    echo "Invalid date!";
}
echo "<br />";


//gmdate()
echo gmdate("d-m-Y");
echo "<br />";
print_r($_POST);


//date_default_timezone_set("Asia/Kolkata")
//date_default_timezone_get()

date_default_timezone_set("Asia/Tokyo");
echo '<button class="btn btn-primary">';
echo date("d-m-Y H:i:s");
echo '</button>';
echo "<h1>".$tm = $_POST['data']."</h1>";
$ts = strtotime($tm);
    echo date("d-m-Y H:i:s", $ts);
?>
<form method="POST" action="">
    <input type="date" name="data" class="form-control">
    <input type="submit">
</form>


date_default_timezone_get()
<?php 
echo date_default_timezone_get();
echo "<br />";


//date_create
 $dt =  date_create("2024-10-07");
 echo date_format($dt, "d-m-Y H:i:s");

 echo "<br />-----------------------<br />";
 
 date_modify($dt, "+1 month");
 echo date_format($dt, "d-m-Y H:i:s");
 
 //date_diff()
 $dt1 = date_create("2024-08-08");
 $diff = date_diff($dt, $dt1);
 $diff->format("%R%a days");
 
 
 echo "<br />-----------------------<br />";
 
 // age calculation
 $birthdate = date_create("2035-08-15");
 $today = date_create();
 $age = date_diff($birthdate, $today);
 
 echo "Age of person: ". $age->y ." Years, ". $age->m ."months and  ". $age->d. " days, Years Old.";
 echo "<br />-----------------------<br />";

echo "you have ". $age->format("%R days left to complete.");


date_add($birthdate, date_interval_create_from_date_string("10 days"));
echo date_format($birthdate, "d-m-Y");
echo "<br />";
date_sub($birthdate, date_interval_create_from_date_string("2 month 10 days"));
echo date_format($birthdate, "d-m-Y");
/* 
Years
Months,
Days,
Hours
Minutes
Seconds
*/

?>
</body>
</html>