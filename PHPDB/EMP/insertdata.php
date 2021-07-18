<?php
include "dbconfig.php";
 $user=$_POST['username'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $desig=$_POST['designation'];
 $salary=$_POST['salary'];
 $password=$_POST['password'];

 //insert data to database
 $sql="insert into emp_registration values(0,'$user','$email','$phone','$desig','$salary','$password')";
if($con->query($sql)){
  echo "data inserted successfully";
}
else{
  echo "something wrong";
}

?>