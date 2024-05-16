<?php
session_start();
include_once '../assets/conn/dbconnect.php';
if(!isset($_SESSION['patientSession']))
{
header("Location: ../index.php");
}

$usersession = $_SESSION['patientSession'];


$res=mysqli_query($con,"SELECT * FROM patient WHERE icPatient=".$usersession);

if ($res===false) {
	echo mysql_error();
} 

$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical Solutions Appointment</title>

    <!-- Bootstrap -->
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <style>

body.fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        body.fade-in.loaded {
            opacity: 1;
        }
       
        .heyy {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow */
}
        .hey {
            
  font-family: "Josefin Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
    
}


        body {

            font-family: 'Josefin Sans', sans-serif; /* Apply Poppins font to all text */
            font: 'Josefin Sans';
            background-image: url('assets/img/madrid.jpg'); /* Replace 'assets/img/doc admin img.png' with the path to your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
        }

        html {
            height: 100%;
        }

        .sos-btn {
            cursor: pointer;
            margin-top: 10px;
            margin-right: 10px;
            font-size: 20px;
            position: relative;
        }

        .sos-btn .fa-ambulance:hover {
            cursor: default;
        }

       
        .sos-btn:hover {
    color: #007bff; /* Change text color to blue */
    border-color: #007bff; /* Change border color to blue */
    display: block;
}
        .alert-box {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border-radius: 10px;
    width: 500px; /* Adjust width as needed */
    height: 400px; /* Adjust height as needed */
    padding: 20px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    box-sizing: border-box; /* Include padding in the width and height */
}

.alert-box h2 {
    font-weight: bold;
    margin-bottom: 0px;
    
}

.alert-box .wrap-screen {
    margin-bottom: 20px;
    width: 80%; /* Adjust width as needed */
    height: 60%; /* Adjust height as needed */
    overflow: hidden; /* Hide any overflowing parts of the GIF */
    margin: 0 auto; /* Center the GIF horizontally */
}


.alert-box .wrap-screen iframe {
    width: 90%;
    height: 90%;
}

.alert-box p {
    margin-bottom: 10px;
}


.alert-box button {
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: block;
    margin: 0 auto; /* Center the button horizontally */
}


.alert-box span {
    display: block;
    margin-top: 20px;
    font-size: 14px;
}
.navbar-brand {
        position: static;
    
    }
    .hey.centre {
        text-align: center;
        color: white; /* Assuming you want white text on black background */
    }

    .copyright-bar {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    .bg-black {
    background-color: black;
    color: white; /* Assuming you want white text on black background */
    padding: 20px 0; /* Adjust padding as needed */
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
}

.nav.navbar-nav {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow */
}




    </style>
</head>

<body class="fade-in">

    <nav class="navbar navbar-default " role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="patient.php">
    <img alt="Brand" src="assets/img/logo.png" height="150px">
</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=" hey collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class=" heyy collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="patient.php">Home</a></li>
                    <li><a href="patientapplist.php?patientId=<?php echo $userRow['icPatient']; ?>">Appointment</a>
                    </li>
                    <li><a href="insurance.php" target="_blank">Insurance</a></li>
                    <li><a href="therapy.php" target="_blank">Therapy</a></li>

                    <li><a href="about.php" target="_blank">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fa-user"></i> <?php echo $userRow['patientFirstName']; ?>
                            <?php echo $userRow['patientLastName']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php?patientId=<?php echo $userRow['icPatient']; ?>"><i
                                        class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="patientapplist.php?patientId=<?php echo $userRow['icPatient']; ?>"><i
                                        class="glyphicon glyphicon-file"></i> Appointment</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="patientlogout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log
                                    Out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sos-btn">
                        <span class="fa fa-ambulance"></span>
                        <div class="alert-box" style="width: 600px; height: 400px; padding: 30px; z-index:11;">
    <h2 style="font-weight: bold;">On Your Way</h2>
    <div class="wrap-screen">
        <iframe src="https://giphy.com/embed/JpuA4gv8SsrnQ5uGUF?loop=1" width="200" height="200" frameborder="0" class="giphy-embed" allowfullscreen></iframe>
    </div>
    <div>
        <p style="font-size: 14px;">We have received your request. Ambulance will reach on your provided address.</p>
        <span style="font-size: 14px;">Medical Solutions</span>
        <button onclick="toggleBtn()" style="position: absolute; top: 10px; right: 10px; padding: 5px 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Close</button>
    </div>
</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 1st section start -->
    <section id="promo-1" class="content-block promo-1 min-height-600px bg-blue">
        <div class="container">
            <div class="row">
            <div class="hey col-xs-12 col-md-10">



                    <?php if ($userRow['patientMaritialStatus'] == "") {
                    // <!-- / notification start -->
                    echo "<div class='row'>";
                    echo "<div class='col-lg-12'>";
                    echo "<div class='alert alert-danger alert-dismissable'>";
                    echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                    echo " <i class='fa fa-info-circle'></i>  <strong>Please complete your profile.</strong>";
                    echo "  </div>";
                    echo "</div>";
                    // <!-- notification end -->

                    } else {
                    }
                    ?>
                    <!-- notification end -->

                    <div class="container">
                    <div class="hey row">
    <div class="col-xs-12 col-md-8">
        <div style="white-space: nowrap; text-align: center;">
            <h1><strong class="hey" style="color: skyblue; text-decoration: underline; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); -webkit-text-stroke: 0.7px black;">Hey <?php echo $userRow['patientFirstName']; ?>
                <?php echo $userRow['patientLastName']; ?>, Make an Appointment Today!</strong></h1>
        </div>
    </div>
</div>





                <div class="input-group">
                    <!-- Input group content -->
                    <div class="input-group-addon" style="width: 30px;">
    <i class="fa fa-calendar"></i>
</div>

<input class="form-control" id="date" name="date" value="<?php echo date("Y-m-d") ?>" onchange="showUser(this.value)" placeholder="Select a date" style="width: 710px;" />
</div>
                    <!-- date textbox end -->
                    <!-- script start -->
                    <script>
                        function showUser(str) {

                            if (str == "") {
                                document.getElementById("txtHint").innerHTML = "No data to be shown";
                                return;
                            } else {
                                if (window.XMLHttpRequest) {
                                    // code for IE7+, Firefox, Chrome, Opera, Safari
                                    xmlhttp = new XMLHttpRequest();
                                } else {
                                    // code for IE6, IE5
                                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                }
                                xmlhttp.onreadystatechange = function () {
                                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                    }
                                };
                                xmlhttp.open("GET", "getschedule.php?q=" + str, true);
                                console.log(str);
                                xmlhttp.send();
                            }
                        }
                    </script>

                    <!-- script start end -->

                    <!-- table appointment start -->
                    <!-- <div class="container"> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-8">
                                <div id="txtHint"></div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- table appointment end -->
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- first section end -->
    <!-- footer start -->
    <footer class="copyright-bar bg-black">
        <div class="container">
            <p class="hey centre">Patient Management System</p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/date/bootstrap-datepicker.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/collapse.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- date start -->
    <script>
    $(document).ready(function () {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        
        // Add class to date input
        date_input.addClass('hey');

        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    });
</script>
    <!-- date end -->
    <script>
        function toggleBtn() {
            // Show the SOS alert box
            $('.backdrop').toggleClass('hide');
        }

        $(document).ready(function () {
            // Add click event handler for the SOS button
            $('.sos-btn').click(function () {
                $('.alert-box').toggle();
            });
        });
    </script>
<script>
window.embeddedChatbotConfig = {
chatbotId: "wtQzM0Uj3Bjbg6wvKJBZ8",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="wtQzM0Uj3Bjbg6wvKJBZ8"
domain="www.chatbase.co"
defer>
</script>
<script>
        // Add 'loaded' class to body after the page is fully loaded
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
    </script>
</body>

</html>
