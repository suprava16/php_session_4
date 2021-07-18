<?php
include "dbconfig.php";

session_start();
if(isset($_SESSION['email'])){
  echo "welcome $_SESSION[email]";
  $qry="select * from emp_registration";
$result=$con->query($qry);
if($result->num_rows>0){
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
  <table border="1">
    <tr>
      <th>username</th>
      <th>email</th>
      <th>phone</th>
      <th>designation</th>
      <th>salary</th>
    </tr>
    <?php
     while($data=$result->fetch_assoc()){
      $username=$data['username'];
      $email=$data['email'];
      $phone=$data['phone'];
      $desig=$data['designation'];
      $salary=$data['salary'];
    ?>
    <tr>
      <td><?php echo $username;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $phone;?></td>
      <td><?php echo $desig;?></td>
      <td><?php echo $salary;?></td>
     <?php
    echo  "<td><a href='delete.php?uid=$data[id]'>delete</a></td>";
      ?> 
    </tr>
  

<?php
  }
}
}
?>
</table>
</body>
</html>