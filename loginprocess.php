<?php
$username1 = $_POST['user'];
$password1 = $_POST['pass'];

//to prevent mysql injection
/* $username = stripcslashes($username);
 $password = stripcslashes($password);
 $username = mysqli_real_escape_string($username);
 $password = mysqli_real_escape_string($password);*/

//connect to the server and select database

$servername="localhost";
$username="root";
$password="";
$dbname="calstrack";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
echo "<script>alert('Connection succeed')</script>";

$sql="select * from users where username=$username1 and password=$password1;";
$result=mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);


if(!$row){
    echo "login failed";
}
else{
    echo "Login success! Welcome ".$username1;
}

