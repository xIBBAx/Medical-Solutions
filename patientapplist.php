<?php
session_start();
include_once '../assets/conn/dbconnect.php';
$session=$_SESSION[ 'patientSession'];

if(!isset($_SESSION['patientSession']))
{
header("Location: ../index.php");
}


$res=mysqli_query($con, "SELECT a.*, b.*,c.* FROM patient a
	JOIN appointment b
		On a.icPatient = b.patientIc
	JOIN doctorschedule c
		On b.scheduleId=c.scheduleId
	WHERE b.patientIc ='$session'");
	if (!$res) {
		die( "Error running $sql: " . mysqli_error());
	}
	$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Make an Appointment</title>
    <link href="assets/css/material.css" rel="stylesheet">
    <link href="assets/css/default/style.css" rel="stylesheet">
    <link href="assets/css/default/blocks.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
		    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /* Add styles for the chatbot icon */

    body {
  background-image: url('assets/img/madrid 2.jpg'); /* Add background image */
  background-color: skyblue;
  font-family: 'Poppins', sans-serif;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

body.loaded {
            opacity: 1;
        }
h1 {
  font-family: 'Bebas Neue', cursive;
  text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5);
  color: white;
  -webkit-text-stroke: 1px skyblue;
}

.panel-body {
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
  padding: 20px;
  background-color: white;
  border-radius: 8px;
}
.navbar-default {
  transition: background-color 0.1s ease, box-shadow 0.3s ease;
}

.navbar-default:hover {
  background: linear-gradient(to right, #87CEEB, #00BFFF);
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}



  </style>
	</head>
	<body>
		<!-- navigation -->
		<nav class="navbar navbar-default" role="navigation" style="background: linear-gradient(to right, #87CEEB, #00BFFF); box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); border: 3px solid rgba(0, 0, 0, 0.2);">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="patient.php"><img alt="Brand" src="assets/img/logo.png" height="40px"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<ul class="nav navbar-nav">
							<li><a href="patient.php">Home</a></li>
							<!-- <li><a href="profile.php?patientId=<?php echo $userRow['icPatient']; ?>" >Profile</a></li> -->
							<li><a href="therapy.php?patientId=<?php echo $userRow['icPatient']; ?>">Therapy</a></li>
							<li><a href="insurance.php?patientId=<?php echo $userRow['icPatient']; ?>">Insurance</a></li>
							<li><a href="about.php?patientId=<?php echo $userRow['icPatient']; ?>">About Us</a></li>

						</ul>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						<?php
								if (!empty($userRow)) {
									// $userRow is not null or empty, so it's safe to access its elements.
									echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> " . $userRow['patientFirstName'] . " " . $userRow['patientLastName'] . "<b class=\"caret\"></b></a>";
								} else {
									// Handle the case where $userRow is null or empty, e.g., display a default user name.
									echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Guest<b class=\"caret\"></b></a>";
								}
								?>

							<ul class="dropdown-menu">
								<li>
									<a href="profile.php?patientId=<?php echo $userRow['icPatient']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
								</li>
								<li>
									<a href="patientapplist.php?patientId=<?php echo $userRow['icPatient']; ?>"><i class="fa fa-calendar"></i> Appointment</a>
								</li>
								<li>
    <a href="therapy.php?patientId=<?php echo $userRow['icPatient']; ?>"><i class="fa fa-stethoscope"></i> Therapy</a>
</li>


								<li class="divider"></li>
								<li>
									<a href="patientlogout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>




<?php


echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='page-header'>";
echo "<h1>Your Appointment List. </h1>";
echo "</div>";
echo "<div class='panel panel-primary'>";
echo "<div class='panel-heading'>List of Appointments</div>";
echo "<div class='panel-body'>";
echo "<table class='table table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th>App Id</th>";
echo "<th>patientIc </th>";
echo "<th>patientLastName </th>";
echo "<th>scheduleDay </th>";
echo "<th>scheduleDate </th>";
echo "<th>startTime </th>";
echo "<th>endTime </th>";
echo "<th>Print </th>";
echo "</tr>";
echo "</thead>";
$res = mysqli_query($con, "SELECT a.*, b.*,c.*
		FROM patient a
		JOIN appointment b
		On a.icPatient = b.patientIc
		JOIN doctorschedule c
		On b.scheduleId=c.scheduleId
		WHERE b.patientIc ='$session'");

if (!$res) {
die("Error running $sql: " . mysqli_error());
}


while ($userRow = mysqli_fetch_array($res)) {
echo "<tbody>";
echo "<tr>";
echo "<td>" . $userRow['appId'] . "</td>";
echo "<td>" . $userRow['patientIc'] . "</td>";
echo "<td>" . $userRow['patientLastName'] . "</td>";
echo "<td>" . $userRow['scheduleDay'] . "</td>";
echo "<td>" . $userRow['scheduleDate'] . "</td>";
echo "<td>" . $userRow['startTime'] . "</td>";
echo "<td>" . $userRow['endTime'] . "</td>";
echo "<td><a href='invoice.php?appid=".$userRow['appId']."' target='_blank'><span class='glyphicon glyphicon-print' aria-hidden='true'></span></a> </td>";
}

echo "</tr>";
echo "</tbody>";
echo "</table>";

?>

	</div>
</div>
</div>
</div>
<!-- display appoinment end -->
<script>
    // Toggle chat window display
    function toggleChatWindow() {
        var chatWindow = document.getElementById("chat-window");
        if (chatWindow.style.display === "none") {
            chatWindow.style.display = "block"; // Show chat window
        } else {
            chatWindow.style.display = "none"; // Hide chat window
        }
    }
</script>
<script>
    // Function to redirect to the chat page
    function redirectToChatPage() {
        // Redirect to the specified page
        window.location.href = 'patientapplistchatbot.php';
    }
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
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>