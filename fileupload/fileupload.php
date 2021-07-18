<?php
//connection with database
$con=new mysqli("localhost","root","","upload");
if($con->connect_error){
  die("something wrong in database connection..try again");
}

if(isset($_POST['add'])){
  $username=$_POST['username'];
  $file_name=$_FILES['profile_image']['name'];
  $file_tmp_name=$_FILES['profile_image']['tmp_name'];

  $file_path="../profiles_pic/$username";
    $file_ab_path=$file_path."/".$file_name;

    if (!is_dir($file_path)) {
      mkdir($file_path, 0777, true);
  }

  if(move_uploaded_file($file_tmp_name,$file_ab_path))
  {
       $qry="insert into upload_image values(0,'$username','$file_ab_path')";
       if($con->query($qry)){
          $msg="One profile Added";
       }
  }
  else
  {
      echo $_FILES['profile_image']['error']."<br>";
      echo "could not upload the file.";
  }
}
?>

<!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      </head>
      <body>
      <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="enter username"><br>
        <input type="file" name="profile_image"><br>
        <input type="submit" value="Add" name="add">
      </form>
      </body>
      </html>