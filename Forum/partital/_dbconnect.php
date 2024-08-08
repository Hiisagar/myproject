<?php
$server_name="localhost";
$server_user="root";
$server_password="";
$db_user="icoding";
// connect to the database
$conn=mysqli_connect($server_name,$server_user,$server_password,$db_user);
if(!$conn){
    die("database are not connected");
}

?>