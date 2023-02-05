<?php
$connn=mysqli_connect("localhost","root","","User");

$sqls="INSERT INTO users (first_name, last_name, email, age)
VALUES('Jane', 'Doe', 'janedoe@example.com', 32)";

if(mysqli_query($connn,$sqls))
{
  echo"SENT";
}
else
{
  echo"NOT SENT".mysqli_error($connn);
}

?>