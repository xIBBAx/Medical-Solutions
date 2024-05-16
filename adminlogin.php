<?php
include_once 'assets/conn/dbconnect.php';

session_start();
if (isset($_SESSION['doctorSession']) != "") {
header("Location: doctor/doctordashboard.php");
}
if (isset($_POST['login']))
{
$doctorId = mysqli_real_escape_string($con,$_POST['doctorId']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM doctor WHERE doctorId = '$doctorId'");

$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
// echo $row['password'];
if ($row['password'] == $password)
{
$_SESSION['doctorSession'] = $row['doctorId'];
?>
<script type="text/javascript">
alert('Login Success');
</script>
<?php
header("Location: doctor/doctordashboard.php");
} else {
?>
<script type="text/javascript">
    alert("Wrong input");
</script>
<?php
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor Panel</title>
    <link rel="shortcut icon" type="image/png" href="patient\assets\img\Untitled design.png" sizes="1000x1000">

    <!-- Google Font - Josefin Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom Styles */
        body {
            font-family: 'Josefin Sans', sans-serif; /* Applying Josefin Sans font */
            background-image: url('doctor/assets/img/doc panell.jpg');
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 100vh; /* Full height */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Hide overflow to prevent scrollbars */
            position: relative; /* Position relative for absolute positioning */
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9); /* Adding transparency */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Adding shadow */
            max-width: 400px; /* Limit container width for better readability */
            width: 90%; /* Set container width */
            text-align: center; /* Center align content */
            margin: auto; /* Center the container horizontally */
            transition: transform 0.3s ease; /* Add transition effect */
            position: relative; /* Position relative for absolute positioning */
        }

        .login-container:hover {
            transform: translateY(-10px); /* Lift the container on hover */
        }

        .avatar img {
            max-width: 100%;
            height: auto;
        }

        .form-box {
            margin-top: 30px;
        }

        .form input[type="text"],
        .form input[type="password"] {
            width: calc(100% - 22px); /* Adjust input width */
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 25px; /* Rounded input fields */
            border: 2px solid #ddd; /* Light border */
            box-sizing: border-box;
            transition: border-color 0.3s ease; /* Add transition for border color */
        }

        .form input[type="text"]:focus,
        .form input[type="password"]:focus {
            border-color: #17a2b8; /* Highlight border on focus */
        }

        .form button.login {
            width: 100%;
            padding: 15px;
            border-radius: 25px;
            background-color: #17a2b8; /* Using Bootstrap's info color */
            border: none;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Add transition for background color */
        }

        .form button.login:hover {
            background-color: #138496; /* Darken the color on hover */
        }

        .clock {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 18px;
    color: #000;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* White shadowy glossy effect */
    text-outline: 2px skyblue; /* Sky blue outline */
    transition: color 0.3s ease; /* Smooth transition for color change */
}

    </style>
</head>

<body>
    <!-- Clock -->
    <div class="clock" id="clock"></div>
    <!-- End Clock -->

    <div class="container">
        <!-- Login Form -->
        <div class="login-container">
            <div class="avatar">
                <img src="doctor/assets/img/portrait-3d-male-doctor.jpg" alt="Doctor Avatar">
            </div>
            <div class="form-box">
                <form class="form" role="form" method="POST" accept-charset="UTF-8">
                <div style="text-align: center; margin-top: 2px;">
    <h1 style="font-family: 'Josefin Sans', sans-serif; color: #000; text-shadow: 0 0 10px rgba(255, 255, 255, 0.5); text-outline: 2px skyblue;">Doctor Panel</h1>
</div>

                    <input name="doctorId" type="text" placeholder="Doctor ID" required>
                    <input name="password" type="password" placeholder="Password" required>
                    <button class="btn btn-info btn-block login" type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
        <!-- End Login Form -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="assets/js/jquery.js"></script>
    <script>
        // Function to get current Indian time and date
        function getCurrentTime() {
            var now = new Date();
            var options = {
                timeZone: 'Asia/Kolkata', // Indian Timezone
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };
            var indianTime = now.toLocaleString('en-IN', options);
            return indianTime;
        }

        // Function to update clock every second
        function updateClock() {
            var clock = document.getElementById('clock');
            clock.textContent = getCurrentTime();
        }

        // Update clock every second
        setInterval(updateClock, 1000);
    </script>
</body>

</html>
