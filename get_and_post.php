<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
  <input type="text" placeholder="enter username" name="username">
  <input type="password" placeholder="enter password" name="password">
  <input type="submit" value="submit" name="login">
  </form>
</body>
</html>

<?php
if(isset($_POST['login'])){
  $user=$_POST['username'];
  $p=$_POST['password'];
  //echo "username=$user and password=$p";

  if($user==="suprava" && $p="sup"){
    header("location:home.php?msg=success");
  }
  else{
    header("location:home.php?msg=fail");
  }
}





?>
<!-- <?php
 $user=$_POST['username'];
 $p=$_POST['password'];

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
  <table>
  <tr><td><?php echo $user;?></td>
  <td><?php echo $password;?></td></tr></table>
</body>
</html> -->