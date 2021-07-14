<?php
include "dbconfig.php";
$email=$_POST['email'];
$password=$_POST['password'];


$qry="select * from emp_registration where email='$email' and password='$password'";
$result=$con->query($qry);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  session_start();
  $_SESSION['email']=$data['email'];
  $_SESSION['id']=$data['id'];
header("location:home.php");
}
else{
  echo "no data available";
}
?>