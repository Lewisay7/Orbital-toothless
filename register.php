<?php
$username2 = $_POST['user'];
$password2 = $_POST['pass'];


$servername="localhost";
$username="root";
$password="";
$dbname="calstrack";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
//echo "Connection succeed";

$sql="SELECT user_id,username,password FROM users WHERE username = '$username2' AND password = '$password2';";
$result=mysqli_query($conn,$sql);

try{
    $row=mysqli_fetch_assoc($result);
    if($row) {
        throw new Exception("Username not available!");
    }

    $sql2="INSERT INTO users (username, password) VALUES ('$username2', '$password2');";
    $result2=mysqli_query($conn,$sql2);
    if (!$result2) {
        throw new Exception("Username not available!");
    }
    else{
        $sql3="SELECT user_id,username,password FROM users WHERE username = '$username2' AND password = '$password2';";
        $result3=mysqli_query($conn,$sql3);
        if(!$result3){
            echo "<script>alert('Register failed.')</script>";
        }
        else{
            echo "<script>alert('Register completed! Please proceed to login.') </script>";
            echo '<meta http-equiv="refresh" content="0.1;url=login.html">';
        }

    }
}
catch(Exception $e){
    echo "<script>alert('Username not available! Try another username or proceed to login.') </script>";
    echo '<meta http-equiv="refresh" content="0.1;url=Register.html">';
}




