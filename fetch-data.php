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

$records_per_page = isset($_GET['records_per_page']) ? (int)$_GET['records_per_page'] : 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $records_per_page;

// count records
$counting = "SELECT COUNT(id) AS total from staff";
$counts = mysqli_query($conn, $counting);
$total_records = mysqli_fetch_assoc($counts)['total'];
$total_pages = ceil($total_records / $records_per_page);


echo "<div class='my-3'> Showing " . ($offset +1). " to ". min($offset + $records_per_page, $total_records) . " of $total_records records</div>";
?>

<form method="GET" class="mb-3">
<label for="records_per_page"> Records per page: </label>
<select name="records_per_page" id="records_per_page" onchange="this.form.submit()">
    <option value="10" <?= $records_per_page == 10 ? ' selected ' : ''; ?>>10</option>
    <option value="25" <?= $records_per_page == 25 ? ' selected ' : ''; ?>>25</option>
    <option value="50" <?= $records_per_page == 50 ? ' selected ' : ''; ?>>50</option>
    <option value="100" <?= $records_per_page == 100 ? ' selected ' : ''; ?>>100</option>
</select>
</form>

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
$sql = "select * from staff LIMIT $offset, $records_per_page";
$r = mysqli_query($conn, $sql);

 $i = $offset + 1;
while ($row = mysqli_fetch_assoc($r)){
 
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

<nav aria-label="page navigation">
    <ul class="pagination">
        <?php if ($current_page > 1){ ?>
            <li class="page-item">
            <a class="page-link" href="?page=<?= $current_page - 1; ?>&records_per_page=<?= $records_per_page; ?>"> Previous </a>
            </li>
            <?php } ?>
    
   <!-- Dispaly previous three pages -->
   <?php 
   for ($page = max(1, $current_page-3); $page < $current_page; $page++){
?>
<li class="page-item">
<a class="page-link" href="?page=<?= $page; ?>&records_per_page=<?= $records_per_page; ?>"><?= $page; ?></a>
</li>
<?php
   }
   ?>
   <!-- /Dispaly previous three pages -->

   <!-- current Page -->
   <li class="page-item active" aria-current="page">
    <span class="page-link"><?= $current_page; ?></span>    
    </li>
   <!-- //current Page -->
    

   <!-- Dispaly Next three pages -->
   <?php 
   for ($page = $current_page +1; $page <= min($total_pages, $current_page +3); $page++){
   //for ($page = max(1, $current_page-3); $page < $current_page; $page++){
?>
<li class="page-item">
<a class="page-link" href="?page=<?= $page; ?>&records_per_page=<?= $records_per_page; ?>"><?= $page; ?></a>
</li>
<?php
   }
   ?>
   <!-- /Dispaly Next three pages -->
   
        <?php if ($current_page < $total_pages){ ?>
            <li class="page-item">
            <a class="page-link" href="?page=<?= $current_page + 1; ?>&records_per_page=<?= $records_per_page; ?>"> Next </a>
            </li>
            <?php } ?>



    </ul>
</nav>

<?php 
print_r($_SERVER);
?>

<a href="#top">Top</a>
<div id="bottom"></div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
</body>
</html>