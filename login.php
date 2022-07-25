<?php
$username1 = $_POST['user'];
$password1 = $_POST['pass'];


$servername="localhost";
$username="root";
$password="";
$dbname="calstrack";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
//echo "Connection succeed";

$sql="SELECT user_id,username,password FROM users WHERE username = '$username1' AND password = '$password1';";
$result=mysqli_query($conn,$sql);


try{
    $row=mysqli_fetch_assoc($result);
    if(!$row){
        throw new Exception("Wrong attempt");
    }

    if($row["username"] == $username1){
        $userid = $row["user_id"];
        echo "<script>alert('login succeed!') </script>";
        ?><meta http-equiv="refresh" content="0.1;url=mainpage.php?user=<?php echo $userid ?>"><?php
    }
    else{
        throw new Exception("Wrong attempt");
    }
}
catch(Exception $e){
    echo "<script>alert('Wrong attempt. Try again!')</script>";
    echo '<meta http-equiv="refresh" content="0.1;url=login.html">';
}


