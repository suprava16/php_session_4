<?php
$email=$_POST['email'];
$password=$_POST['password'];

//connection with database
$con=new mysqli("localhost","root","","empdata_php7");
if($con->connect_error){
  die("something wrong in database connection..try again");
}

$qry="select * from emp_registration where email='$email' and password='$password'";
$result=$con->query($qry);
if($result->num_rows>0){
header("location:home.php");
}
else{
  echo "no data available";
}
?>