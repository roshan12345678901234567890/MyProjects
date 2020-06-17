<?php 

include_once('database.php');

$con = new mysqli($server, $user, $password, $database);

$create ="CREATE TABLE maincontactform (
    Fname varchar(50) ,
    Lname varchar(50) ,
    Phone varchar(12) ,
    mail varchar(255) ,
    message varchar(8000)
   ) ";
   
if (mysqli_query($con, $create)){

} 

?>