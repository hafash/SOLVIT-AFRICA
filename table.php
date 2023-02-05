<?php
$conn=mysqli_connect("localhost","root","","User");
if(!$conn){
    die("connection failed".
    mysqli_connect_error());
}
$sql="CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT NOT NULL
)";
if(mysqli_query($conn,$sql))
{
  echo"Table created";
}
else
{
  echo"failed to create Table".mysqli_error($conn);
}

?>