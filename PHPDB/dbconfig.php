<?php
//connection with database
$con=new mysqli("localhost","root","","empdata_php7");
if($con->connect_error){
  die("something wrong in database connection..try again");
}
?>