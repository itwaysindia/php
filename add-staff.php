<?php 
require_once('includes/db.php');

if(isset($_GET['id'])){
    $staff_id = $_GET['id'];
    $fetch = "select * from staff where id = '$staff_id'";
    $re = mysqli_query($conn, $fetch);
    $row1 = mysqli_fetch_assoc($re);
    // echo "<pre>";
    // print_r($row1);
}


if(isset($_POST['update'])){
    
    @$name= $_POST['name'];
    @$contact= $_POST['contact'];
    @$post= $_POST['designation'];
    @$manager= $_POST['manager'];
    @$id = $_POST['id'];
    
    
    $query = "update staff set name ='$name', contact= '$contact', 
    designation= '$post', manager_id = '$manager' where id = '$id'";
    echo $query;
    if(mysqli_query($conn, $query)){
        ?>
        <div class="alert alert-primary" role="alert">
     Data Updated Successfully!
    </div>
        <?php 
    }else{ ?>
        <div class="alert alert-danger" role="alert">
     Error: <?php echo $query . " - " .mysqli_error($conn); ?>
    </div>
    <?php
    }
    }
   



if(isset($_POST['submit'])){
@$name= $_POST['name'];
@$contact= $_POST['contact'];
@$post= $_POST['designation'];
@$manager= $_POST['manager'];


$query = "insert into staff(name, contact, designation, manager_id) 
VALUES ('$name', '$contact', '$post', '$manager')";

if(mysqli_query($conn, $query)){
    ?>
    <div class="alert alert-primary" role="alert">
 Data Inserted Successfully!
</div>
    <?php 
}else{ ?>
    <div class="alert alert-danger" role="alert">
 Error: <?php echo $query . " - " .mysqli_error($conn); ?>
</div>
<?php
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<div class="container">
<div align="right">
    <a class="btn btn-primary"  href="fetch-data.php">Show All Records</a>
</div>
<div class="row m-0">
    <form action="" method="POST">
    <div class="col-md-5">
        <div class="row p-2">
            <label for="name">Staff Name*</label>
            <input type="text" id="name" required name="name" class="form-control" <?php if(isset($_GET['id'])){ ?> value="<?= $row1['name']; ?>" <?php  } ?>>
        </div>
        <div class="row p-2">
            <label for="contact">Staff Contact* </label>
            <input type="text" id="contact" required name="contact" class="form-control" <?php if(isset($_GET['id'])){ ?> value="<?= $row1['contact']; ?>" <?php  } ?>>
        </div>
        <div class="row p-2">
        <?php if(isset($_GET['id'])){
            $db_post =  $row1['designation'];
         } ?>
            <label for="designation">Designation</label>
            <select required name="designation" class="form-control">
                <option value="">-- SELECT DESIGNATION --</option>
                <option value="emp" <?php if($db_post=='emp'){ echo "selected"; } ?> >Employee</option>
                <option value="manager" <?php if($db_post=='manager'){ echo "selected"; } ?>>manager</option>
</select>

        </div>

<?php 
if(isset($_GET['id'])){
    $db_mid =  $row1['manager_id'];
    if($db_mid){
?>
        <div class="row p-2">
        <?php if(isset($_GET['id'])){
            $db_mid =  $row1['manager_id'];
         } ?>
            <label for="manager">Select Manager</label>
            <select required name="manager" class="form-control">
                <option value="">-- SELECT MANAGER --</option>
                <?php 
                
                $sql = "select * from staff where designation='manager'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result))
                { ?>
                    <option value="<?= $row['id']; ?>" <?php if($db_mid == $row['id']){ echo "selected"; } ?>><?= $row['id']. " | ". $row['name']; ?></option>

                <?php }
                ?>
            </select>
        </div>
        <?php } } ?>

        <div class="row p-2">
            <input type="hidden" name="id" value=<?= $_GET['id']; ?>>
        <?php if(isset($_GET['id'])){ ?>
        
            <input type="submit" class="btn btn-primary mt-2" name="update" value="Update Staff">

            <?php   }else{ ?>

    <input type="submit" class="btn btn-primary mt-2" name="submit" value="Add Staff">
    
    <?php } ?>
        </div>

    </div>
</form>





<div class="col-md-5">
     <h3>Recent Staff Added</h3>

    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
</body>
</html>