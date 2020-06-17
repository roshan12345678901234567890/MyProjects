<?php 

include_once('createdb.php');

$con = new mysqli($server, $user, $password, $database);

$create ="CREATE TABLE user (id int not null auto_increment primary key, userName varchar(200), mobile varchar(12), email varchar(200), profileImage varchar(200), password varchar(200), registerDate timestamp)";

if (mysqli_query($con, $create)){

} 

?>