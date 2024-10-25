<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />

    <title>Sign Up</title>
</head>
<body>
<?php
require_once('includes/db.php');
$table_sql = "CREATE TABLE IF NOT EXISTS login(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at timestamp default current_timestamp
)";

mysqli_query($conn, $table_sql);

$password = md5($_POST['email'].$_POST['password']);
$sql = "insert into login (name, contact, email, password) 
values ('$_POST[name]', '$_POST[contact]', '$_POST[email]', '$password')";

$q = mysqli_query($conn, $sql);
if($q){
    echo "Registered";
}else{
    echo "Failed";
}
?>
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Sign-Up</h2>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" />
              </div>
              <div class="mb-4">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" name="contact" class="form-control" id="contact" />
              </div>
              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" />
              </div>
              <div class="mb-4">
                <input type="checkbox" class="form-check-input" id="remember" />
                <label for="remember" class="form-label">Remember Me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
              <div class="d-grid">
<a href="login.php" class="btn btn-default">Login</a>              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>