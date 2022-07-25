<?php
$user_id = $_GET['user'];
$date = $_POST['date'];
$food = $_POST['food'];
$food_cals = $_POST['input'];
$exer = $_POST['excercise'];
$exer_min = $_POST['burnt'];

include("db_configuration.php");

//convert to Mysql date format
$d2 = strtotime($date);
$d = date('Y-m-d', $d2);


if($food_cals > 0){
    $sql_insert_food="INSERT INTO food (user_id, date, foodtype, n_grams) VALUES ('$user_id', '$d', '$food', '$food_cals');";
    $result_insert_food = mysqli_query($conn,$sql_insert_food);
    if (!$result_insert_food) {
        echo "<script>alert('Add food failed!') </script>";
    }
    else{
        $msg = 'Successfully added '.$food_cals.' grams of '.$food.' on '.$d;
        echo '<script>alert( "'.$msg.'") </script>';
    }
}

if($exer_min > 0){
    $sql_insert_exercise="INSERT INTO exercise (user_id, date, exercisetype, n_min) 
            VALUES ('$user_id', '$d', '$exer', '$exer_min');";
    $result_insert_exercise = mysqli_query($conn,$sql_insert_exercise);
    if (!$result_insert_exercise) {
        echo "<script>alert('Add exercise failed!') </script>";
    }
    else{
        $msg = 'Successfully added '.$exer_min.' min of '.$exer.' on '.$d;
        echo '<script>alert( "'.$msg.'") </script>';
    }
}

?><meta http-equiv="refresh" content="0.1;url=mainpage.php?user=<?php echo $user_id ?>">';





