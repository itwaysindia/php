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

<a href="#bottom">Bottom</a>
<div id="home"></div>
<?php 
require_once('includes/db.php');
if(isset($_GET['delete'])){
$sql = "delete from staff where id = '". $_GET['delete'] . "'";
if(mysqli_query($conn, $sql)){
    ?>
    <div class="alert alert-primary" role="alert">
 Data Deleted Successfully!
</div>
    <?php 
}else{ ?>
    <div class="alert alert-danger" role="alert">
 Error: <?php echo $query . " - " .mysqli_error($conn); ?>
</div>
<?php
}
}

/* query for pagination */

$record_per_page = isset($_GET['record_per_page']) ? (int)$_GET['record_per_page'] : 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $record_per_page;

// count records
$counting = "SELECT COUNT(id) AS total from staff";
$counts = mysqli_query($conn, $counting);
$total_records = mysqli_fetch_assoc($counts)['total'];
$total_pages = ceil($total_records / $record_per_page);

$sql = "select * from staff LIMIT $offset, $record_per_page";
$result = mysqli_query($conn, $sql);
echo "<div class='my-3'> Showing " . ($offset +1). " to ". min($offset + $record_per_page, $total_records) . "of $total_records records</div>";
?>

<form method="GET" class="mb-3">
<label for="records_per_page"> Records per page: </label>
<select name="records_per_page" id="records_per_page" onchange="this.form.submit()">
    <option value="10"> <?= $record_per_page == 10 ? 'selected' : ''; ?>10</option>
    <option value="25"> <?= $record_per_page == 25 ? 'selected' : ''; ?>25</option>
    <option value="50"> <?= $record_per_page == 50 ? 'selected' : ''; ?>50</option>
    <option value="100"> <?= $record_per_page == 100 ? 'selected' : ''; ?>100</option>
</form>
<?php
/* Query end */









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
        
        <td><a href="add-staff.php?id=<?= $row['id'];?>"> Edit</a> 
        | <a href="?delete=<?= $row['id'];?>">Delete</a></td>
    </tr>
    
<?php $i++; } ?>
</table>


<a href="#top">Top</a>
<div id="bottom"></div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
</body>
</html>