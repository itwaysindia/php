<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php 
$name = $_GET['name'];
$detail = $_GET['detail'];
$num = $_GET['num'];

function sanitize($data){
    $data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);
    return $data;
}
function int($data){
    $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
?>
    <div class="container m-5">

    <table class="table table-striped">
        <tr><th>Number</th><th>Name</th><th>Details</th></tr>
        <tr><td><?= int($num); ?></td><td><?= sanitize($name); ?></td><td><?= sanitize($detail); ?></td></tr>
    </table>
    <form action="" method="GET">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Number</label>
  <input type="text" required name="num" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your NAme">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" required name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your NAme">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Describe yourself</label>
  <textarea name = "detail" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>