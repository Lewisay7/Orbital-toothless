<?php
$servername="localhost";
$username="root";
$password="";
$dbname="calstrack";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "Database Connection Failed.";}
?>