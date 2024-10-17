<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Print</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
 <?php 
require_once('includes/db.php');

$sql = "select * from staff";
$result = mysqli_query($conn, $sql);

// print_r($result);

// $row = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($row);
// die;
//fetch data

?>
<div align="right">
    <a class="btn btn-primary my-2" href="add-staff.php">Add Staff</a>
</div>
<table class="table table-striped" width="100%" border="1">
    <tr>
        <th>Sr. No</th>
        <th>Staff Name</th>
        <th>Contact</th>
        <th>Designation</th>
        <th>Manager Name</th>
        <th>Action</th>
</tr>
<?php 
 $i = 1;
while ($row = mysqli_fetch_assoc($result)){
 
  ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['contact']; ?></td>
        <td><?= $row['designation']; ?></td>
        <td><?= $row['manager_id']; ?></td>
        
        <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
    </tr>
    
<?php $i++; } ?>
</table>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
</body>
</html>