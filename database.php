<?php

//connect Server with  the database
$conn=mysqli_connect("localhost","root","");
//checking if connection is successfull
if(!$conn){
    die("connection failed".
    mysqli_connect_error());
}

$sql="CREATE DATABASE User";

if(mysqli_query($conn,$sql))
{
  echo"Database created";
}
else
{
  echo"failed to create database".mysqli_error($conn);
}
?>

