<?php
$user_id = $_GET['user'];//accept user id from previous page
include("db_configuration.php");
$sql_check = "SELECT username FROM users WHERE user_id= $user_id;";
$result_check = mysqli_query($conn, $sql_check);
$row_check=mysqli_fetch_assoc($result_check);
?>

<!doctype html>
<html lang="en">

<head>
    <title>TrackUrCals</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./design.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/default.date.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="header">
    <h1 class="header_logo">TrackUrCals</h1>
</div>

<div class="offset">


    <form action= "mainpage_process.php?user=<?php echo $user_id ?>" method="post">
        <label for="food">Choose a food:</label>
        <select name="food" id="food">
            <?php
            $sql_food_list = "SELECT foodtype FROM food_list;";
            $result_food_list = mysqli_query($conn, $sql_food_list);

            while ($row_food_list=mysqli_fetch_assoc($result_food_list)) {
                $temp_food= $row_food_list['foodtype'];
                ?><option value="<?php echo($temp_food) ?>"><?php echo($temp_food) ?></option><?php
            }
            ?>
        </select>
        <label for="input">Input(in grams): </label>
        <input type="number" id="input" name="input" max="9999" min="1">
        <br>

        <label for="excercise">Choose an excercise:</label>
        <select name="excercise" id="excercise">
            <?php
            $sql_exercise_list = "SELECT exercisetype FROM exer_list;";
            $result_exercise_list = mysqli_query($conn, $sql_exercise_list);

            while ($row_exercise_list=mysqli_fetch_assoc($result_exercise_list)) {
                $temp_exer = $row_exercise_list['exercisetype'];
                ?><option value="<?php echo($temp_exer) ?>"><?php echo($temp_exer) ?></option><?php
            }
            ?>
        </select>

        <label for="burnt">Burnt(in minutes): </label>
        <input type="number" id="burnt" name="burnt" max="1440" min="1">
        <br>
        <br>
        <div class="content">
            <div class="container text-left">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="pick-date" name="date" placeholder="Pick A Date">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <input type="submit" value="Save">

    </form>
</div>






<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/picker.js"></script>
<script src="js/picker.date.js"></script>
<script src="js/main.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="./new.js"></script>
<script src="client/src/App.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
<footer >
    <div id="site_footer">
        <p>Creators: Lim Zhen Yong | Lewis Chong Li Wei<br>
            @OrbitalToothless</p>
    </div>
</footer>


</html>