<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Random Data</title>
</head>
<body>
<?php require_once('includes/db.php'); 

$first_name = ['Ram', 'Saurabh', 'Sachin', 'Naman', 'Arun', 'Pankaj', 'Ayush', 'Diwakar'];
$last_name = ['Tiwari', 'Tripathi', 'Sharma', 'Shukla', 'Singh', 'Mishra', 'Dubey', 'Verma'];
// $house_no = rand(1, 1000);
// $location = ['Ashiana', 'LDA Colony', 'Kanpur Road', 'Alambagh', 'Para', 'Gomti Nagar', 'Indra Nagar', 'Krishna Nagar', 'Telibagh'];
// $city = 'Lucknow';
$first_digit = rand(6, 9);
$restDigits = rand(100000000, 999999999);
echo $contact = $first_digit.$restDigits;
$designation = ['emp', 'manager', 'emp', 'emp'];


for ($i=0; $i<=500; $i++){
    $firstName = $first_name[array_rand($first_name)];
    $lastName = $last_name[array_rand($last_name)];
    $fullName = $firstName . " ". $lastName;
     $post = $designation[array_rand($designation)];
    
    if($post == 'emp'){
            $manager = [];
            $sql = "select * from staff where designation='manager'";
            $result = mysqli_query($conn, $sql);

            
            while ($row = mysqli_fetch_assoc($result)){
                $manager[] = $row['id'];
            }

         $man = $manager[array_rand($manager)];
    }else{
        $man = 0;
    }
    echo "<br />insert into staff (name, contact, designation, manager_id) values
    ('$fullName', '$contact', '$post', '$man')";
}
?>

</body>
</html>