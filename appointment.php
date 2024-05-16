<?php
session_start();
include_once '../assets/conn/dbconnect.php';
$session= $_SESSION['patientSession'];
// $appid=null;
// $appdate=null;
if (isset($_GET['scheduleDate']) && isset($_GET['appid'])) {
	$appdate =$_GET['scheduleDate'];
	$appid = $_GET['appid'];
}
// on b.icPatient = a.icPatient
$res = mysqli_query($con,"SELECT a.*, b.* FROM doctorschedule a INNER JOIN patient b
WHERE a.scheduleDate='$appdate' AND scheduleId=$appid AND b.icPatient=$session");
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);


	
//INSERT
if (isset($_POST['appointment'])) {
$patientIc = mysqli_real_escape_string($con,$userRow['icPatient']);
$scheduleid = mysqli_real_escape_string($con,$appid);
$symptom = mysqli_real_escape_string($con,$_POST['symptom']);
$comment = mysqli_real_escape_string($con,$_POST['comment']);
$avail = "notavail";


$query = "INSERT INTO appointment (  patientIc , scheduleId , appSymptom , appComment  )
VALUES ( '$patientIc', '$scheduleid', '$symptom', '$comment') ";

//update table appointment schedule
$sql = "UPDATE doctorschedule SET bookAvail = '$avail' WHERE scheduleId = $scheduleid" ;
$scheduleres=mysqli_query($con,$sql);
if ($scheduleres) {
	$btn= "disable";
} 


$result = mysqli_query($con,$query);
// echo $result;
if( $result )
{
?>
<script type="text/javascript">
alert('Appointment made successfully.');
</script>
<?php
header("Location: patientapplist.php");
}
else
{
	echo mysqli_error($con);
?>
<script type="text/javascript">
alert('Appointment booking fail. Please try again.');
</script>
<?php
header("Location: patient/patient.php");
}
//dapat dari generator end
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Appointment</title>
    <link rel="icon" type="image/png" href="patient/assets/img/Untitled design.png" sizes="60x60">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            background-image: url('assets/img/madrid 1.jpg'); /* Placeholder background image */
            background-size: cover;
            background-repeat: no-repeat;
        }
        .user-wrapper {
            background-color: rgba(255, 255, 255, 0.9); /* White background with opacity */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow effect */
            transition: box-shadow 0.3s ease; /* Smooth transition */
            outline: 2px solid skyblue; /* Outline with sky blue color */
            outline-offset: -10px; /* Offset to align with border-radius */
        }
        .user-wrapper:hover {
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3); /* Shadow effect on hover */
        }
        .user-wrapper .description h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .user-wrapper .description button.btn {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease; /* Smooth transition */
        }
        .user-wrapper .description button.btn:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .navbar-nav, .dropdown-menu {
            font-family: 'Josefin Sans', sans-serif;
        }
        .logo {
    width: 100px; /* Set the logo width */
    /* margin-right: 10px; Remove this line or adjust it as needed */
}

        .center {
            display: flex;
            align-items: center;
        }
        .center {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; /* Ensure vertical alignment */
}

        
    </style>
</head>
<body style="display:none;"> <!-- Initially hide the body -->
    <!-- navigation -->
    <nav class="navbar navbar-light" style="background-color: skyblue; border: 3px solid rgba(0,0,0,0.2); box-shadow: 0px 2px 4px rgba(0,0,0,0.1);">
        <div class="container">
            <a class="navbar-brand" href="patient.php"><img alt="Brand" src="assets/img/logo.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="patient.php">Home</a>
                    </li>
                    <li class="nav-item">
    <a class="nav-link" href="patientapplist.php?patientId=<?php echo $userRow['icPatient']; ?>">
        <i class="fa fa-calendar"></i> <!-- FontAwesome icon for appointment -->
        Appointment
    </a>
</li>

                </ul>
                <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> <?php echo $userRow['patientFirstName']; ?> <?php echo $userRow['patientLastName']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profile.php?patientId=<?php echo $userRow['icPatient']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
            <div class="dropdown-divider"></div>

<a class="dropdown-item" href="therapy.php?logout"><i class="fa fa-fw fa-stethoscope"></i> Therapy</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="patientlogout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>


        </div>
    </li>
</ul>

            </div>
        </div>
    </nav>
    <!-- navigation -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="user-wrapper">
                <div class="description center text-center">
    <h1><?php echo $userRow['patientFirstName']; ?> <?php echo $userRow['patientLastName']; ?></h1>
</div>

                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="user-wrapper">
                    <div class="description">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form" role="form" method="POST" accept-charset="UTF-8">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Patient Information</div>
                                        <div class="panel-body">
                                            Patient Name: <?php echo $userRow['patientFirstName'] ?> <?php echo $userRow['patientLastName'] ?><br>
                                            Patient IC: <?php echo $userRow['icPatient'] ?><br>
                                            Contact Number: <?php echo $userRow['patientPhone'] ?><br>
                                            Address: <?php echo $userRow['patientAddress'] ?>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Appointment Information</div>
                                        <div class="panel-body">
                                            Day: <?php echo $userRow['scheduleDay'] ?><br>
                                            Date: <?php echo $userRow['scheduleDate'] ?><br>
                                            Time: <?php echo $userRow['startTime'] ?> - <?php echo $userRow['endTime'] ?><br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="symptom" class="control-label">Symptom:</label>
                                        <input type="text" class="form-control" id="symptom" name="symptom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment" class="control-label">Comment:</label>
                                        <textarea class="form-control" id="comment" name="comment" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="appointment" id="submit" class="btn btn-primary" value="Make Appointment">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Fade in the body when the document is ready
            $("body").fadeIn();

            $('.nav-link.dropdown-toggle').click(function(e){
                e.preventDefault();
                $(this).next('.dropdown-menu').slideToggle(300);
            });
        });

        // Fade out before leaving the page
        $(window).on("beforeunload", function() {
            $("body").fadeOut();
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
</body>
</html>
