<?php
//connection with database
$con=new mysqli("localhost","root","","upload");
if($con->connect_error){
  die("something wrong in database connection..try again");
}
$qry="select * from upload_image";
$result=$con->query($qry);
if($result->num_rows>0){
  while($data=$result->fetch_assoc()){
    $username=$data['username'];
    echo "<div>";
    echo "username: $username";
    echo "</div>";
    echo "<div>";
    echo "<img src='$data[profile]' height=100 width=100>";
    echo "</div>";
  }
}

?>