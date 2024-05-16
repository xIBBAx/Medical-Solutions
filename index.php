<?php
include_once 'assets/conn/dbconnect.php';
// include_once 'assets/conn/server.php';
?>


<!-- login -->
<!-- check session -->
<?php
session_start();
// session_destroy();
if (isset($_SESSION['patientSession']) != "") {
header("Location: patient/patient.php");
}
if (isset($_POST['login']))
{
$icPatient = mysqli_real_escape_string($con,$_POST['icPatient']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM patient WHERE icPatient = '$icPatient'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

if (isset($row['password']) && $row['password'] == $password){
   $_SESSION['patientSession'] = $row['icPatient'];
?>
<script type="text/javascript">
alert('Login Success');
</script>
<?php
header("Location: patient/patient.php");
} else {
?>
<script>
alert('wrong input ');
</script>
<?php
}
}
?>
<!-- register -->
<?php
if (isset($_POST['signup'])) {
$patientFirstName = mysqli_real_escape_string($con,$_POST['patientFirstName']);
$patientLastName  = mysqli_real_escape_string($con,$_POST['patientLastName']);
$patientEmail     = mysqli_real_escape_string($con,$_POST['patientEmail']);
$icPatient     = mysqli_real_escape_string($con,$_POST['icPatient']);
$password         = mysqli_real_escape_string($con,$_POST['password']);
$month            = mysqli_real_escape_string($con,$_POST['month']);
$day              = mysqli_real_escape_string($con,$_POST['day']);
$year             = mysqli_real_escape_string($con,$_POST['year']);
$patientDOB       = $year . "-" . $month . "-" . $day;
$patientGender = mysqli_real_escape_string($con,$_POST['patientGender']);
//INSERT
$query = " INSERT INTO patient (  icPatient, password, patientFirstName, patientLastName,  patientDOB, patientGender,   patientEmail )
VALUES ( '$icPatient', '$password', '$patientFirstName', '$patientLastName', '$patientDOB', '$patientGender', '$patientEmail' ) ";
$result = mysqli_query($con, $query);
// echo $result;
if( $result )
{
?>
<script type="text/javascript">
alert('Register success. Please Login to make an Appointment.');
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert('User already registered. Please try again');
</script>
<?php
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Panel</title>
    <link rel="shortcut icon" type="image/png" href="patient\assets\img\Untitled design.png" sizes="1000x1000">
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
    <link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <style>
        .switch {
  /* switch */
  --switch-width: 46px;
  --switch-height: 24px;
  --switch-bg: rgb(131, 131, 131);
  --switch-checked-bg: rgb(0, 218, 80);
  --switch-offset: calc((var(--switch-height) - var(--circle-diameter)) / 2);
  --switch-transition: all .2s cubic-bezier(0.27, 0.2, 0.25, 1.51);
  /* circle */
  --circle-diameter: 18px;
  --circle-bg: #fff;
  --circle-shadow: 1px 1px 2px rgba(146, 146, 146, 0.45);
  --circle-checked-shadow: -1px 1px 2px rgba(163, 163, 163, 0.45);
  --circle-transition: var(--switch-transition);
  /* icon */
  --icon-transition: all .2s cubic-bezier(0.27, 0.2, 0.25, 1.51);
  --icon-cross-color: var(--switch-bg);
  --icon-cross-size: 6px;
  --icon-checkmark-color: var(--switch-checked-bg);
  --icon-checkmark-size: 10px;
  /* effect line */
  --effect-width: calc(var(--circle-diameter) / 2);
  --effect-height: calc(var(--effect-width) / 2 - 1px);
  --effect-bg: var(--circle-bg);
  --effect-border-radius: 1px;
  --effect-transition: all .2s ease-in-out;
}

.switch input {
  display: none;
}

.switch {
  display: inline-block;
}

.switch svg {
  -webkit-transition: var(--icon-transition);
  -o-transition: var(--icon-transition);
  transition: var(--icon-transition);
  position: absolute;
  height: auto;
}

.switch .checkmark {
  width: var(--icon-checkmark-size);
  color: var(--icon-checkmark-color);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
}

.switch .cross {
  width: var(--icon-cross-size);
  color: var(--icon-cross-color);
}

.slider {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: var(--switch-width);
  height: var(--switch-height);
  background: var(--switch-bg);
  border-radius: 999px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  position: relative;
  -webkit-transition: var(--switch-transition);
  -o-transition: var(--switch-transition);
  transition: var(--switch-transition);
  cursor: pointer;
  left: -930px; /* Adjust this value to shift it to the left */
}


.circle {
  width: var(--circle-diameter);
  height: var(--circle-diameter);
  background: var(--circle-bg);
  border-radius: inherit;
  -webkit-box-shadow: var(--circle-shadow);
  box-shadow: var(--circle-shadow);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-transition: var(--circle-transition);
  -o-transition: var(--circle-transition);
  transition: var(--circle-transition);
  z-index: 1;
  position: absolute;
  left: var(--switch-offset);
}

.slider::before {
  content: "";
  position: absolute;
  width: var(--effect-width);
  height: var(--effect-height);
  left: calc(var(--switch-offset) + (var(--effect-width) / 2));
  background: var(--effect-bg);
  border-radius: var(--effect-border-radius);
  -webkit-transition: var(--effect-transition);
  -o-transition: var(--effect-transition);
  transition: var(--effect-transition);
}

/* actions */

.switch input:checked+.slider {
  background: var(--switch-checked-bg);
  background: var(--switch-checked-bg); /* Change background color for dark mode */

}

.switch input:checked+.slider .checkmark {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  color: var(--circle-bg); /* Change color of checkmark icon for dark mode */

}

.switch input:checked+.slider .cross {
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  color: var(--switch-checked-bg); /* Change color of cross icon for dark mode */

}

.switch input:checked+.slider::before {
  left: calc(100% - var(--effect-width) - (var(--effect-width) / 2) - var(--switch-offset));
}

.switch input:checked+.slider .circle {
  left: calc(100% - var(--circle-diameter) - var(--switch-offset));
  -webkit-box-shadow: var(--circle-checked-shadow);
  box-shadow: var(--circle-checked-shadow);
  background: var(--switch-checked-bg); /* Change background color of circle for dark mode */

}
h1 {
            font-size: 2.5em; /* Increase font size */
            color: #28282B; /* Matte black color */
            text-shadow: 1px 1px 1px #000; /* Silver outlining */
            background: linear-gradient(45deg, #f0f0f0, #87CEEB); /* Shining effect background */
            -webkit-background-clip: text; /* Clip the background to the text */
            -webkit-text-fill-color: transparent; /* Make the text transparent */
            display: inline-block; /* Necessary for applying background to text */
            padding: 5px; /* Add padding for spacing */
        }

        p {
            font-size: 1.4em; /* Increase font size */
            color: #87CEEB; /* Matte black color */
            text-shadow: 1px 1px 1px #000; /* Silver outlining */
            text-align: center; /* Center-align text */
            margin: 0; /* Remove default margin */
        }
html {
    height: 100%; /* Ensure that the HTML element takes up the full height of the viewport */
}
 /* Fade in animation */
 @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Fade out animation */
        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        /* Apply fade in and fade out to the body */
        body.fade-in {
            animation: fadeIn 1s ease-in;
        }

        body.fade-out {
            animation: fadeOut 1s ease-out;
        }
        /* Custom styles */
        body {
            transition: background-image 1s ease-in-out; /* Smooth transition for background image */
            font-family: 'Josefin Sans', sans-serif;
            background-image: url('patient/assets/img/background 6.png'); /* Specify the path to your background image */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent the background image from repeating */
            background-attachment: fixed; /* Fix the background image so it doesn't scroll with the content */
            background-position: center; /* Center the background image */
            display: flex;
    flex-direction: column; /* Arrange child elements vertically */
    min-height: 100vh;
        }
        .navbar {
            background-color: ##FFFFFF; /* Primary color */
            border-bottom: 3px solid #0056b3; /* Darker variant of primary color */
        }
        .navbar-brand img {
            height: 200px; /* Adjust as needed */
            margin-top: 10px; /* Adjust as needed */
        }
        .btn-primary {
            background-color: #00ffe5;
            border-color: #00ffe5;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker variant of primary color */
            border-color: #0056b3;
        }
        /* Footer styling */
        .footer {
    background-color: #000000;
    padding: 10px 0;
    color: #87CEEB;
    text-align: center;
    margin-top: auto; /* Push the footer to the bottom */
    border-top: 3px solid #0000FF; /* Add sky blue border line */
    box-shadow: 0px 4px 100px rgba(0, 128, 255, 0.3); /* Add sky blue shadow */
}

        .footer a {
            color: #0056b3; /* Blue link color */
            text-decoration: none; /* Remove underline */
        }
        .footer a:hover {
            color: #87CEEB; /* Change text color on hover */
        }
        .dropdown-menu-wide {
    min-width: 200px; /* Adjust the width as needed */
    border-radius: 10px; /* Add curved border */
}

.form-control {
        width: 100%; /* Adjust the width as needed */
        margin: 0 auto; /* Center the form elements */
    }
    .btn-block {
        width: 80%; /* Adjust the width as needed */
        margin: 0 auto; /* Center the button */
    }
    </style>
</head>
<body class="fade-in">
    

<div id="clock" style="position: fixed; bottom: 10px; right: 10px; color: skyblue; font-size: 40px;"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img alt="Brand" src="img/logoddd.png" height="40"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Already have an account?</b> <span class="caret"></span></a>
    <ul class="dropdown-menu dropdown-menu-wide">
        <li>
            <!-- Login Form -->
            <div class="row">
            <div class="col-md-12" style="border-radius: 30px;">
                    <form class="form" role="form" method="POST" accept-charset="UTF-8">
                    <div class="form-group">
    <input type="text" class="form-control" name="icPatient" placeholder="IC Number" required>
</div>
<div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Password" required>
</div>
<div class="form-group">
    <button type="submit" name="login" id="login" class="btn btn-primary btn-block">Sign in</button>
</div>
                    </form>
                </div>
            </div>
        </li>
    </ul>
</li>

                    <!-- Dropdown for Login -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <!-- Login Form -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="POST" accept-charset="UTF-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="icPatient" placeholder="IC Number" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="login" id="login" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- modal container start -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- modal content -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div style="text-align: center;">
  <h3 class="modal-title">Sign Up</h3>
</div>
                    </div>
                    <!-- modal body start -->
                    <div class="modal-body">
                        
                        <!-- form start -->
                        <div class="container" id="wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8" class="form" role="form">
                                    <h5 style="text-align: center;">"Take the first step towards better health. Sign up now to schedule an appointment with our caring team of doctors."</h5>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">
                                                <input type="text" name="patientFirstName" value="" class="form-control input-lg" placeholder="First Name" required />
                                            </div>
                                            <div class="col-xs-6 col-md-6">
                                                <input type="text" name="patientLastName" value="" class="form-control input-lg" placeholder="Last Name" required />
                                            </div>
                                        </div>
                                        
                                        <input type="text" name="patientEmail" value="" class="form-control input-lg" placeholder="Your Email"  required/>
                                        <input type="number" name="icPatient" value="" class="form-control input-lg" placeholder="Your IC Number"  required/>
                                        
                                        
                                        <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  required/>
                                        
                                        <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  required/>
                                        <label>Birth Date</label>
                                        <div class="row">
                                            
                                            <div class="col-xs-4 col-md-4">
                                                <select name="month" class = "form-control input-lg" required>
                                                    <option value="">Month</option>
                                                    <option value="01">Jan</option>
                                                    <option value="02">Feb</option>
                                                    <option value="03">Mar</option>
                                                    <option value="04">Apr</option>
                                                    <option value="05">May</option>
                                                    <option value="06">Jun</option>
                                                    <option value="07">Jul</option>
                                                    <option value="08">Aug</option>
                                                    <option value="09">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-4">
                                                <select name="day" class = "form-control input-lg" required>
                                                    <option value="">Day</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-4">
                                                <select name="year" class = "form-control input-lg" required>
                                                    <option value="">Year</option>
                                                    
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2013">2014</option>

                                                </select>
                                            </div>
                                        </div>
                                        <label>Gender : </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="patientGender" value="male" required/>Male
                                        </label>
                                        <label class="radio-inline" >
                                            <input type="radio" name="patientGender" value="female" required/>Female
                                        </label>
                                        <br />
                                        <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie
Use.</span>
                                        
                                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="signup" id="signup">Create my account</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- modal end -->
        <!-- modal container end -->
        <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1><strong style="white-space: nowrap;">Make an Appointment Today!</strong></h1>
                <p>This is Doctor's Schedule. Please <span class="label label-danger">login</span> to make an appointment. </p>
                <!-- date textbox -->
                <div class="input-group" style="margin-bottom:10px;">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input class="form-control" id="date" name="date" value="<?php echo date("Y-m-d")?>" onchange="showUser(this.value)" style="width: 480px;" />
                </div>
                <!-- date textbox end -->
                <!-- script start -->
                <script>
                    function showUser(str) {
                        if (str == "") {
                            document.getElementById("txtHint").innerHTML = "";
                            return;
                        } else { 
                            if (window.XMLHttpRequest) {
                                // code for IE7+, Firefox, Chrome, Opera, Safari
                                xmlhttp = new XMLHttpRequest();
                            } else {
                                // code for IE6, IE5
                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                            }
                            xmlhttp.onreadystatechange = function() {
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                }
                            };
                            xmlhttp.open("GET","getuser.php?q="+str,true);
                            console.log(str);
                            xmlhttp.send();
                        }
                    }
                </script>
        <script>
        // JavaScript code for fade-out effect
        window.addEventListener('beforeunload', function() {
            document.body.classList.add('fade-out');
        });
    </script>
    <script>
        // JavaScript code (including PHP-generated JavaScript)
    </script>
                
                <div id="txtHint"><b> </b></div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <strong><p class="small">Patient Management System</p></strong>
            <p><a href="adminlogin.php">Admin</a></p>
        </div>
        <label class="switch">
    <input checked="" type="checkbox">
    
</label>
    </footer>
    <!-- jQuery and Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#date').datepicker({
            format: 'yyyy-mm-dd', // Date format
            autoclose: true, // Close the datepicker when a date is selected
            todayHighlight: true, // Highlight today's date
        });
    });
</script>
<script>
    // JavaScript code for wallpaper slideshow
    var images = ['patient/assets/img/background 6.png', 'patient/assets/img/temp1.jpg', 'patient/assets/img/temp2.jpg', 'patient/assets/img/temp3.jpg','patient/assets/img/temp4.jpg', 'patient/assets/img/temp5.jpg']; // Array of image URLs
    var currentIndex = 0; // Initialize index to 0

    function changeBackground() {
        document.body.style.backgroundImage = 'url(' + images[currentIndex] + ')'; // Change background image
        currentIndex = (currentIndex + 1) % images.length; // Increment index and loop back to the beginning if necessary
    }

    // Call changeBackground function every 5 seconds
    setInterval(changeBackground, 5000);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
        // JavaScript code for clock update
        function updateClock() {
            var now = new Date();
            var day = now.toLocaleDateString('en-US', { weekday: 'long' });
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            hours = (hours < 10) ? '0' + hours : hours;
            minutes = (minutes < 10) ? '0' + minutes : minutes;
            seconds = (seconds < 10) ? '0' + seconds : seconds;

            document.getElementById('clock').innerHTML = hours + ':' + minutes + ':' + seconds + ' ' + day;

            setTimeout(updateClock, 1000);
        }

        updateClock();
    </script>
</body>
</html>
