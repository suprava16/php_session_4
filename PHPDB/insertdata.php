<?php

 $user=$_POST['username'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $desig=$_POST['designation'];
 $salary=$_POST['salary'];
 $password=$_POST['password'];

 //connection with database
 $con=new mysqli("localhost","root","","empdata_php7");
 if($con->connect_error){
   die("something wrong in database connection..try again");
 }

 //insert data to database
 $sql="insert into emp_registration values(0,'$user','$email',$phone,'$desig','$salary','$password')";
if($con->query($sql)){
  echo "data inserted successfully";
}
else{
  echo "something wrong";
}

?>