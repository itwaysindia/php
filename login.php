<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap 5 - Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body class="main-bg">

<?php 
require_once('includes/db.php');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['email'].$_POST['password']);

     $sql = "select email, password from login where email='$email' and password='$password'";
    if($r = mysqli_query($conn, $sql)){
         $c = mysqli_num_rows($r);
         if($c == 1){
            
            session_start();
            $_SESSION['username'] = $email;

            if(!isset($_SESSION['is_logged_in'])){
                $_SESSION['is_logged_in'] = 1;
            }

            header("Location: index.php");
            die;

         }else{
            echo "Username or password is incorrect!";
         }
    }
}

?>
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Login</h2>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="mb-4">
                <label for="username"  class="form-label">Email</label>
                <input type="email" required name="email" class="form-control" id="username" />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" required name="password" class="form-control" id="password" />
              </div>
              <div class="mb-4">
                <input type="checkbox" class="form-check-input" id="remember" />
                <label for="remember" class="form-label">Remember Me</label>
              </div>
              <div class="d-grid">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
              </div>
              <div class="d-grid">
<a href="sign-up.php" class="btn btn-default">Sign Up</a>              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>