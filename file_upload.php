<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php
    $uploadPath = "uploads/";
    @$name = $_POST['username'];

    //abs()
    // ceil()
    // floor
    // sqrt

    $random  = rand(1, 3);

    echo $random. "<br />";
// print_r($_POST);
// print_r($_FILES);

if(!isset($_FILES['profile_pic'])){
    echo "No file uploaded!";
}
if(isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == UPLOAD_ERR_OK){
    echo "File Found!";
    $file = $_FILES['profile_pic'];

   echo "<br />".  $tmp_file = $_FILES['profile_pic']['tmp_name'];
   echo "<br>".  $file_name = $_FILES['profile_pic']['name'];
    echo "<br>". $file_size = $_FILES['profile_pic']['size'];
   echo "<br>".  $file_err = $_FILES['profile_pic']['error'];
   echo "<br>".  $file_type = $_FILES['profile_pic']['type'];
echo "<br />";
   $allowed = ['jpg', 'jpeg', 'png'];
   $mime_allowed = ['image/jpeg', 'image/jpg', 'image/png'];

   
    $fileExt = pathinfo($file['name'], PATHINFO_EXTENSION);
    $mime =  mime_content_type($tmp_file);

    $uniqueName = uniqid('', true). '.'.$fileExt;

    if(in_array($fileExt, $allowed) && in_array($mime, $mime_allowed)){
if(!is_dir($uploadPath)){
    if(mkdir($uploadPath, 0755, true)){
echo "Directory Created";
    }else{
        echo "Failed to create Directory.";
    }
}

    if(move_uploaded_file($tmp_file, $uploadPath.$uniqueName)){
echo "File uploaded! Filename is: ". $uniqueName;
    }else{
        echo 'Failed to move file';
        echo '<a href="uploads/">up</a>';
    }
}else{
    echo "Please Upload only JPEG, JPG or PNG files. Your file is $mime";
}

    
}

?>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="username">
    <input type="file" name="profile_pic">
    <br />
    <input type="submit">
</form>


</body>
</html>