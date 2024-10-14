<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asterisk Pattern Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Asterisk Pattern Generator</h2>
    <form method="POST" class="mt-3">
        <div class="form-group">
            <label for="rows">Enter number of rows:</label>
            <input type="text" name="rows" id="rows" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Pattern</button>
    </form>
    <div class="mt-4">
        <?php
                    $rows = $_POST['rows'];

        if(isset($_POST['rows'])){
            $rows=$_POST['rows'];
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "</br>";
            }
        }
        ?>




<!-- // Kite 
   *   
  * *
 * * *
  * *
   *

-->
<?php 
$space = '&nbsp;';
for ($i = 0; $i<=10; $i++){
    echo $i;
    for ($j = 0; $j<=$i; $j++){

       echo $space;
    }
}
?>


    </div>
</div>
</body>
</html>