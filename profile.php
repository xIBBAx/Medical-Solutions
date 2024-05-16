<?php
session_start();
// include_once '../connection/server.php';
include_once '../assets/conn/dbconnect.php';
if(!isset($_SESSION['patientSession']))
{
header("Location: ../index.php");
}
$res=mysqli_query($con,"SELECT * FROM patient WHERE icPatient=".$_SESSION['patientSession']);
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!-- update -->
<?php
if (isset($_POST['submit'])) {
//variables
$patientFirstName = $_POST['patientFirstName'];
$patientLastName = $_POST['patientLastName'];
$patientMaritialStatus = $_POST['patientMaritialStatus'];
$patientDOB = $_POST['patientDOB'];
$patientGender = $_POST['patientGender'];
$patientAddress = $_POST['patientAddress'];
$patientPhone = $_POST['patientPhone'];
$patientEmail = $_POST['patientEmail'];
$patientId = $_POST['patientId'];
// mysqli_query("UPDATE blogEntry SET content = $udcontent, title = $udtitle WHERE id = $id");
$res=mysqli_query($con,"UPDATE patient SET patientFirstName='$patientFirstName', patientLastName='$patientLastName', patientMaritialStatus='$patientMaritialStatus', patientDOB='$patientDOB', patientGender='$patientGender', patientAddress='$patientAddress', patientPhone=$patientPhone, patientEmail='$patientEmail' WHERE icPatient=".$_SESSION['patientSession']);
// $userRow=mysqli_fetch_array($res);
header( 'Location: profile.php' ) ;
}
?>
<?php
$male="";
$female="";
$other="";
if ($userRow['patientGender']=='male') {
$male = "checked";
}elseif ($userRow['patientGender']=='Other') {
	$other = "checked";

}elseif ($userRow['patientGender']=='female') {
$female = "checked";
}
$single="";
$married="";
$separated="";
$divorced="";
$widowed="";
if ($userRow['patientMaritialStatus']=='single') {
$single = "checked";
}elseif ($userRow['patientMaritialStatus']=='married') {
$married = "checked";
}elseif ($userRow['patientMaritialStatus']=='separated') {
$separated = "checked";
}elseif ($userRow['patientMaritialStatus']=='divorced') {
$divorced = "checked";
}elseif ($userRow['patientMaritialStatus']=='widowed') {
$widowed = "checked";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Patient Profile</title>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/default/style.css" rel="stylesheet">
		<!-- <link href="assets/css/default/style1.css" rel="stylesheet"> -->
		<link href="assets/css/default/blocks.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
		<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
		<!--Font Awesome (added because you use icons in your prepend/append)-->
		<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
		<link href="assets/style.css" rel="stylesheet">
	
		<!-- <link href="assets/css/material.css" rel="stylesheet"> -->
	</head>
	<body>
		
		<!-- navigation -->
        <nav class="navbar navbar-default navbar-skyblue" role="navigation">
			<div class="container-fluid">
				<!-- Collect the nav links, forms, and other content for toggling -->
                <ul class="nav navbar-nav navbar-nav-custom">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Solutions</title>
    <style>
        .navbar-nav-custom {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow */
        border: 2px solid white; /* Add white outline stroke */
        border-radius: 20px; /* Add border-radius for rounded corners */
        padding: 10px; /* Add padding for space */
    }

    .navbar-nav-custom li {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add glossy shadow effect */
        border-radius: 20px; /* Add border-radius for rounded corners */
    }
    .navbar-skyblue {
        background: linear-gradient(to bottom, #5CA4FF, #62cff4); /* Gradient colors */
        border: 5px solid #ffffff; /* White border */
        box-shadow: 0 2px 4px rgba(255, 255, 255, 0.3), 0 4px 8px rgba(255, 255, 255, 0.2); /* White shadows */
    }
        /* styles.css */

        /* Add shadow to description and navbar */
        .description, .navbar {
            box-shadow: 0 2px 100px rgba(0, 0, 0, 0.1);
        }
        
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

        body {
            animation: fadeIn 1s ease-in;
        background-image: url('assets/img/j-lee-AQ3e76CoJB8-unsplash.jpg');
        background-size: cover; /* Adjust as needed */
        background-repeat: no-repeat; /* Adjust as needed */
    }
    body.fade-out {
            animation: fadeOut 1s ease-out;
        }
        #container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 3px solid #87CEEB; /* White glossy border */
        box-shadow: 0px 2px 5px rgba(255, 255, 255, 0.3), 0px 4px 8px rgba(255, 255, 255, 0.2); /* White bright shadows */
        }

        h1 {
            text-align: center;
            color: #333;
            
        }

        form {
            text-align: center;
        }

        textarea {
            width: 100%;
            max-width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
            color: skyblue; /* Change text color to sky blue */
        }

        .medicine-image {
            width: 100px; /* Adjust the width to your preference */
            height: auto; /* Maintain aspect ratio */
            cursor: pointer; /* Add cursor pointer */
        }

        select, input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #recommendation {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Enlarged image styles */
        .enlarged-image {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .enlarged-image img {
            display: block;
            margin: auto;
            max-width: 90%;
            max-height: 90%;
        }

        .close-button {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }
        
        .form-control {
        border: 5px solid white; /* White glossy border */
        box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.3), 0px 4px 10px rgba(255, 255, 255, 0.2); /* White bright shadows */
    }
    .navbar {
        background-color: white; /* Glossy white background */
        box-shadow: 1px 2px 100px rgba(255, 255, 255, 0.5); /* White glossy shadow effect */
        border-bottom: 5px solid #7ED6DF; /* Sky blue border */
    }

    .navbar-default .navbar-brand,
    .navbar-default .navbar-nav > li > a {
        color: #000; /* Text color */
    }
    .description {
        background-color: #E5E6E4; /* Background color */
        border: 2px solid transparent; /* Transparent border */
        padding: 20px; /* Add padding for content */
        position: relative; /* Position relative for shadow */
        border-radius: 20px; /* Border radius for curved corners */
        box-shadow: inset 1px 1px 100px 3px #04619F ; /* Bright gradient white shadow */
    }

    .description:before {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        background: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,1)); /* Gradient black borderline */
        z-index: -1; /* Behind the content */
    }
    .panel-body {
        background-color: white; /* Background color */
        box-shadow: 0 0 10px 2px #04619F; /* Sky blue vibrant shadow */
        border: 0.5px solid blue; /* 1px black border */
        border-radius: 10px; /* Border radius for curved corners */
        padding: 20px; /* Add padding for content */
    }
    .img-responsive {
        border-radius: 20px; /* Border radius for curved corners */
        border: 1px solid white; /* White border */
        box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.5); /* White vibrant shadow */
    }
    
        
    </style>
</head>
<body>
</body>
</html>
						</ul>
					</ul>
					
					<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="patient.php">
    <img src="assets/img/logo.png" alt="Your Brand Logo">
</a>
 </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="patient.php">Home</a></li>
                <li><a href="insurance.php">Insurance</a></li>
                <li><a href="therapy.php">Therapy</a></li>
                <li><a href="#" onclick="toggleContent('medicalSolutions')">Medical Solutions</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['patientFirstName']; ?> <?php echo $userRow['patientLastName']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="profile.php?patientId=<?php echo $userRow['icPatient']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                        <li><a href="patientapplist.php?patientId=<?php echo $userRow['icPatient']; ?>"><i class="glyphicon glyphicon-file"></i> Appointment</a></li>
                        <li class="divider"></li>
                        <li><a href="patientlogout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="container">
    <h1>Welcome to Medical Solutions</h1>

    <!-- Medical Solutions tab -->
    <ul>
        <li><a href="#" onclick="toggleContent('medicalSolutions')">Medical Solutions</a></li>
    </ul>

    <!-- Content related to Medical Solutions -->
    <div id="medicalSolutions" style="display: none;">
        <h2>Find Medicines for Your Symptoms</h2>
        <form id="symptomsForm">
            <label for="symptoms">Enter your symptoms:</label><br>
            <textarea id="symptoms" name="symptoms" rows="4" cols="50" placeholder="Enter your symptoms"></textarea><br>
            <label for="duration">Duration of illness:</label><br>
            <select id="duration" name="duration">
                <?php for ($i = 1; $i <= 100; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select><br><br>
            <input type="submit" value="Find Medicines">
            <br>
            <span class="alert-sign"><strong>⚠️ It is suggested that you consult a Doctor before consuming the Medicines! ⚠️</strong></span>

        </form>

        <div id="recommendation"></div>
    </div>
</div>

<div class="enlarged-image" id="enlarged-image">
    <span class="close-button" onclick="closeEnlargedImage()">&times;</span>
    <img id="enlarged-img" src="" alt="Enlarged Image">
</div>

<script>
    document.getElementById('symptomsForm').addEventListener('submit', function (event) {
        event.preventDefault();

        var symptoms = document.getElementById('symptoms').value;
        var duration = document.getElementById('duration').value;

        // Send symptoms and duration to the backend
        fetch('recommendation.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                symptoms: symptoms,
                duration: duration,
            }),
        })
            .then(response => response.json())
            .then(data => {
                var recommendationDiv = document.getElementById('recommendation');
                recommendationDiv.innerHTML = '';

                if (data.length === 0) {
                    recommendationDiv.innerText = 'No medicines found for the given symptoms and duration.';
                } else {
                    recommendationDiv.innerHTML += '<p>Recommended Medicines for Symptoms (' + symptoms + ') and Duration (' + duration + ' days)</p>';

                    data.forEach(function (medicine) {
                        recommendationDiv.innerHTML += '<div><img class="medicine-image" src="' + medicine.image + '" alt="' + medicine.name + '"><p>' + medicine.name + '</p></div>';
                    });

                    // Add event listeners to the medicine images for enlargement
                    var medicineImages = document.querySelectorAll('.medicine-image');
                    medicineImages.forEach(function (image) {
                        image.addEventListener('click', function () {
                            showEnlargedImage(this.src);
                        });
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });

    function toggleContent(id) {
        var element = document.getElementById(id);
        if (element.style.display === 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    // JavaScript function to show the enlarged image
    function showEnlargedImage(imageSrc) {
        var enlargedImage = document.getElementById('enlarged-image');
        var enlargedImg = document.getElementById('enlarged-img');
        enlargedImg.src = imageSrc;
        enlargedImage.style.display = 'block';
    }

    // JavaScript function to close the enlarged image
    function closeEnlargedImage() {
        var enlargedImage = document.getElementById('enlarged-image');
        enlargedImage.style.display = 'none';
    }
</script>


		<!-- navigation -->
		
		<div class="container">
											<!-- Brand and toggle get grouped for better mobile display -->
				<form action="<?php $_PHP_SELF ?>" method="post">
				<div class="form-group">
					<label for="insurancePlan">Select Insurance Plan</label>
                    <select class="form-control" id="insurancePlan" name="insurancePlan">
					<option value="Less than ₹20,000">Less than ₹50,000</option>
					<option value="₹21,000 - ₹50,000">₹50,000 - ₹1,00,000</option>
					<option value="Above ₹50,000">Above ₹1,00,000</option>
					</select>
				</div>
				</form>
			<section style="padding-bottom: 50px; padding-top: 50px;">
				<div class="row">
					<!-- start -->
					<!-- USER PROFILE ROW STARTS-->
					<div class="row">
						<div class="col-md-3 col-sm-3">
							
							<div class="user-wrapper">
								<img src="../assets/img/1.png" class="img-responsive" />
                                <br>
								<div class="description">
									<h4><?php echo $userRow['patientFirstName']; ?> <?php echo $userRow['patientLastName']; ?></h4>
									<h5> <strong> Work </strong></h5>
									<p>
									Input your details for work.
									</p>
									<hr />
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
								</div>
							</div>
						</div>
						
						<div class="col-md-9 col-sm-9  user-wrapper">
							<div class="description">
								<h3> <?php echo $userRow['patientFirstName']; ?> <?php echo $userRow['patientLastName']; ?> </h3>
								<hr>		
								<div class="panel panel-default">
									<div class="panel-body">
										
										
										<table class="table table-user-information">
											<tbody>
												
												
												<tr>
													<td>Patient  Maritial  Status</td>
													<td><?php echo $userRow['patientMaritialStatus']; ?></td>
												</tr>
												<tr>
													<td>Patient DOB</td>
													<td><?php echo $userRow['patientDOB']; ?></td>
												</tr>
												<tr>
													<td>Patient Gender</td>
													<td><?php echo $userRow['patientGender']; ?></td>
												</tr>
												<tr>
													<td>Patient Address</td>
													<td><?php echo $userRow['patientAddress']; ?>
													</td>
												</tr>
												<tr>
													<td>Patient Phone</td>
													<td><?php echo $userRow['patientPhone']; ?>
													</td>
												</tr>
												<tr>
													<td>Patient Email</td>
													<td><?php echo $userRow['patientEmail']; ?>
													</td>
												</tr>
												<tr>
												<td colspan="2">
												<div class="card-container">
													<div class="card">
														<div class="front <?php echo $cardColorClass; ?>">
														<div class="card-details">
															<div class="first-row">
															<h3 class="bold">Medical Solutions</h3>
															<img alt="Brand" src="./assets/img/logo.png" class="card-logo-img" />
															<h3 class="bold">Smart Health Card</h3>
															</div>
															<div class="first-row">
															<img alt="Brand" src="./assets/img/chip.png" class="card-logo-img" />
															<p>Sponsered By <b> Tycoon Companies</b></p>
															<img alt="Brand" src="./assets/img/wifi.png" class="card-wifi-img" />
															</div>
															<div class="first-row">
															<h2 class="bold"><?php echo $userRow['patientFirstName']; ?> <?php echo $userRow['patientLastName']; ?></h2>
															<img alt="Brand" src="./assets/img/1.png" class="card-logo-img" />
															</div>
														</div>
														</div>
														<div class="back <?php echo $cardColorClass; ?>">
														<div class="back-details-main">
                                                        <img alt="Brand" src="assets/img/MS_VIRTUAL_SMART_CARD-removebg-preview.png" class="card-qr-img" style="width: 200px; height: 200px;" />
															<div class="back-details">
															<h2>Virtual Smart Card</h2>
															<p class="card-back-text">Cardholder Name: <?php echo $userRow['patientFirstName']; ?> <?php echo $userRow['patientLastName']; ?></p>
															<p class="card-back-text">IC Number: <?php echo $userRow['icPatient']; ?></p>
															<p class="card-back-text">Expiration Date: 12/24</p>
															<div class="cvv-block">
																<p class="card-back-text">CVV: <a class="cvv">•••</a></p>
																<p class="eye-icon card-back-text">Show / Hide</p>
															</div>
															</div>
														</div>
														</div>
													</div>
													</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<!-- USER PROFILE ROW END-->
					<!-- end -->
					<div class="col-md-4">
						
						<!-- Large modal -->
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Personal Details</h4>
</div>
<div class="modal-body">
    <!-- form start -->
    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
        <table class="table table-user-information">
            <tbody>
													<tr>
														<td>IC Number:</td>
														<td><?php echo $userRow['icPatient']; ?></td>
													</tr>
													<tr>
														<td>First Name:</td>
														<td><input type="text" class="form-control" name="patientFirstName" value="<?php echo $userRow['patientFirstName']; ?>"  /></td>
													</tr>
													<tr>
														<td>Last Name</td>
														<td><input type="text" class="form-control" name="patientLastName" value="<?php echo $userRow['patientLastName']; ?>"  /></td>
													</tr>
													
													<!-- radio button -->
													<tr>
														<td>Maritial Status:</td>
														<td>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="single" <?php echo $single; ?>>Single</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="married" <?php echo $married; ?>>Married</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="separated" <?php echo $separated; ?>>Separated</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="divorced" <?php echo $divorced; ?>>Divorced</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="widowed" <?php echo $widowed; ?>>Widowed</label>
															</div>
														</td>
													</tr>
													<!-- radio button end -->
													<tr>
													<tr>
    <td>DOB</td>
    <td>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input class="form-control" id="patientDOB" name="patientDOB" placeholder="MM/DD/YYYY" type="text" value="<?php echo $userRow['patientDOB']; ?>" />
            </div>
        </div>
    </td>
</tr>

													<!-- radio button -->
													<tr>
														<td>Gender</td>
														<td>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="male" <?php echo $male; ?>>Male</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="female" <?php echo $female; ?>>Female</label>
																<div class="radio">
																<label><input type="radio" name="patientGender" value="other" <?php echo $other; ?>>Other</label>
															</div>
														</td>
													</tr>
													<!-- radio button end -->
													
													<tr>
														<td>Phone number</td>
														<td><input type="text" class="form-control" name="patientPhone" value="<?php echo $userRow['patientPhone']; ?>"  /></td>
													</tr>
													<tr>
														<td>Email</td>
														<td><input type="text" class="form-control" name="patientEmail" value="<?php echo $userRow['patientEmail']; ?>"  /></td>
													</tr>
													<tr>
														<td>Address</td>
														<td><textarea class="form-control" name="patientAddress"  ><?php echo $userRow['patientAddress']; ?></textarea></td>
													</tr>
													<tr>
													
                    <td>Profile Picture:</td>
                    <td>
                        <input type="file" class="form-control" name="profilePicture">
                    </td>
                </tr>
				<td>Uploaded Image:</td>
                    <td>
                        <?php
                        if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] === UPLOAD_ERR_OK) {
                            $uploadDir = 'uploads/'; // Directory where the image will be stored
                            $uploadFile = $uploadDir . basename($_FILES['profilePicture']['name']);
                            if (move_uploaded_file($_FILES['profilePicture']['tmp_name'], $uploadFile)) {
                                echo '<img src="' . $uploadFile . '" alt="Uploaded Image" style="max-width: 200px;">';
                            } else {
                                echo 'Error uploading image.';
                            }
                        }
                        ?>
                    </td>
                </tr>
                <!-- End of added code -->
                <tr>
                    <td>
															<input type="submit" name="submit" class="btn btn-info" value="Update Info"></td>
														</tr>
													</tbody>
													
												</table>
												
												
												
											</form>
											<!-- form end -->
										</div>
										
									</div>
								</div>
							</div>
							<br /><br/>
						</div>
						
					</div>
					<!-- ROW END -->
				</section>

				    <section class="section-cta" id="cta">
      <div class="container">
        <div class="popup_msg">
          <p class="popup_msg_text">
            Message is sent successfully, we will reach to you soon😊
          </p>
        </div>
        <div class="cta">
          <div class="cta-text-box">
            <h2 class="heading-secondary">Facing any difficulties or facing any problems?</h2>
            <p class="cta-text">
              If you find yourself encountering any difficulties or facing any problems, we're here to help. 
			  Please don't hesitate to reach out to us via email, and our dedicated support team will be ready 
			  to assist you with any issues or concerns you may have. Your satisfaction is our top priority, 
			  and we're committed to ensuring a smooth and hassle-free experience for you
            </p>

            <form
              class="cta-form"
              name="sign-up"
              onsubmit="sendMail(); reset(); return false;"
            >
              <div>
                <label for="full-name">Full Name</label>
                <input
                  id="full-name"
                  type="text"
                  placeholder="your name"
                  name="full-name"
                  required
                />
              </div>

              <div>
                <label for="email">Email address</label>
                <input
                  id="email"
                  type="email"
                  placeholder="me@example.com"
                  name="email"
                  required
                />
              </div>
              <button class="btn btn--form">Send</button>
            </form>
          </div>
          <div
            class="cta-img-box"
            role="img"
            
          ></div>
        </div>
      </div>
    </section>
				<!-- SECTION END -->
			</div>
			<!-- CONATINER END -->
			<script>
				document
				.querySelector(".card-container")
				.addEventListener("click", function () {
					this.classList.toggle("is-flipped");
				});

				document.querySelector(".eye-icon").addEventListener("click", function () {
				var cvv = document.querySelector(".cvv");
				if (cvv.textContent === "•••") {
					cvv.textContent = "649";
				} else {
					cvv.textContent = "•••";
				}
				});

			</script>
			    <script src="https://smtpjs.com/v3/smtp.js"></script>
				<script>
				const popup_container = document.querySelector(".popup_msg");
				const popup_msg = document.querySelector(".popup_msg_text");

				function sendMail() {
					Email.send({
					Host: "smtp.elasticemail.com",
					Username: "caretrackerhelp@outlook.com",
					Password: "AA023DADD1D6BBEB94D0C4B44B39D2FA045E",
					To: "medicalsolutions100001@gmail.com",
					From: "caretrackerhelp@outlook.com",
					Subject: `${
						document.getElementById("full-name").value
					}, Wants to talk`,
					Body: `Mr/Mrs ${
						document.getElementById("full-name").value
					}, Wants to talk, contact them at ${
						document.getElementById("email").value
					}. \nHave a nice day :)`,
					}).then((message) => {
					popup_container.classList.add("show");
					setTimeout(() => {
						popup_container.classList.remove("show");
					}, 3000);
					});
				}
				</script>
			<script src="assets/js/jquery.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			
			<script type="text/javascript">
			$(function () {
			$('#patientDOB').datetimepicker();
			});
			</script>

			<script>
				// Add an event listener to the insurancePlan dropdown
				document.getElementById("insurancePlan").addEventListener("change", function () {
					// Get the selected insurance plan
					var selectedPlan = this.value;
					var cardColorClass = "";

					// Calculate the card color based on the selected insurance plan
					if (selectedPlan === "Less than ₹20,000") {
						cardColorClass = "card-white";
					} else if (selectedPlan === "₹21,000 - ₹50,000") {
						cardColorClass = "card-silver";
					} else if (selectedPlan === "Above ₹50,000") {
						cardColorClass = "card-gold";
					}

					// Apply the updated card color to the card container
					var cardContainer = document.querySelector(".card");
					cardContainer.className = "card " + cardColorClass;
				});
			</script>
		</body>
	</html>

	<?php
// Sample patient data
$patients = [
    ["John Doe", "35", "Male", "123 Main St, Anytown, USA", "High blood pressure"],
    ["Jane Smith", "45", "Female", "456 Elm St, Othertown, USA", "Diabetes"],
    // Add more patient data here if needed
];

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $diagnosis = $_POST["diagnosis"];

    // Add the new patient to the patients array
    $newPatient = [$name, $age, $gender, $address, $diagnosis];
    $patients[] = $newPatient;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Report</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f0f8ff; /* Sky blue */
            color: #333; /* Dark gray */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

      

        .report-container {
            border: 2px solid #000; /* Black border */
            border-radius: 10px; /* Rounded corners */
            overflow: hidden; /* Hide overflow content */
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        .report {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff; /* White */
        }

        .report th, .report td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .report th {
            background-color: #f2f2f2; /* Light gray */
        }

        .report tr:nth-child(even) {
            background-color: #f9f9f9; /* Light gray */
        }

        .report tr:hover {
            background-color: #f1f1f1; /* Light gray */
        }

        .delete-btn, .print-btn {
            padding: 5px 10px;
            background-color: #007bff; /* Sky blue */
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            margin-right: 5px; /* Short gap */
            display: inline-block;
        }

        .delete-btn:hover, .print-btn:hover {
            background-color: #0056b3; /* Darker sky blue */
        }

        .add-form-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #000; /* Black border */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 100px #ECECEB rgba(0, 0, 0, 0.1); /* Shadow effect */
            background-color: #fff; /* White */
        }

        .add-form label, .add-form input, .add-form select, .add-form textarea {
            display: block;
            margin-bottom: 10px;
            width: calc(100% - 22px); /* Adjusting for padding */
            padding: 8px;
            border: 1px solid #ccc; /* Light gray */
            border-radius: 3px;
            box-sizing: border-box;
        }

        .add-form textarea {
    margin-bottom: 10px;
    width: calc(50% - 32px); /* Adjusting for padding */
    padding: 8px;
    border: 1px solid #ccc; /* Light gray */
    border-radius: 3px;
    box-sizing: border-box;
    resize: horizontal; /* Allow horizontal resizing */
}



        .add-btn {
            padding: 10px;
            background-color: #007bff; /* Sky blue */
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .add-btn:hover {
            background-color: #0056b3; /* Darker sky blue */
        }

        .photo-column img {
            max-width: 100%;
            height: auto;
        }

        .required {
            color: #ff0000;
        }
        #reportTable {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow effect */
        /* Add other styles for the table */
    }
    h1 {
        color: black; /* Pure white text color */
        text-shadow: 2px 2px 100px rgba(255, 255, 255, 0.5); /* Thick stroke of bright white */
    }

        @media print {
            body {
                background-color: transparent; /* Remove background color */
            }

            .print-content {
                background-image: url('hospital_background.jpg'); /* Add hospital background image */
                background-size: cover;
                background-repeat: no-repeat;
                padding: 20px;
                color: #333; /* Dark gray */
            }

            .print-content img {
                max-width: 100px;
                height: auto;
                float: right;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

<div style="display: flex; justify-content: center; align-items: center;">
    <h1>- PATIENT REPORT -</h1>
</div>
<br>
<div class="report-container">
    <table class='report' id="reportTable">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Diagnosis</th>
            <th class="photo-column">Photo</th>
            <th>Action</th>
        </tr>
    </table>
</div>

<div class="add-form-container">
    <h2>Add Patient</h2>
    <form class="add-form" id="addPatientForm">
        <label for="name">Name:<span class="required">*</span></label>
        <input type="text" id="name" name="name" required>
        
        <label for="age">Age:<span class="required">*</span></label>
        <input type="text" id="age" name="age" required>
        
        <label for="gender">Gender:<span class="required">*</span></label>
        <select id="gender" name="gender" required>
        <option value="" style="text-align: center;">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        
        <label for="address">Address:<span class="required">*</span></label>
        <textarea id="address" name="address" rows="4" required></textarea>
        
        <label for="diagnosis">Diagnosis:<span class="required">*</span></label>
        <textarea id="diagnosis" name="diagnosis" rows="4" required></textarea>
        
        <label for="photo">Photo:<span class="required">*</span></label>
        <input type="file" id="photo" name="photo">
        
        <button type="button" class="add-btn" onclick="addPatient()">Add Patient</button>
    </form>
</div>

<script>

    // JavaScript
function findMedicines() {
    var symptoms = document.getElementById("symptoms").value;
    var duration = document.getElementById("duration").value;

    var data = {
        symptoms: symptoms,
        duration: duration
    };

    // Send data to recommendation.php
    $.ajax({
        type: "POST",
        url: "recommendation.php",
        data: JSON.stringify(data),
        success: function(response) {
            // Process response (e.g., display recommended medicines)
            // You can implement this part based on your UI requirements
            console.log(response); // For debugging
            
            // Add event listeners to each medicine image
            var medicineImages = document.querySelectorAll('.medicine-image');
            medicineImages.forEach(function(image) {
                image.addEventListener('click', function() {
                    // Toggle the 'clicked' class on the clicked image
                    this.classList.toggle('clicked');
                });
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Log any errors
        }
    });
}

    // Load existing patients from localStorage
    window.onload = function() {
        const patients = JSON.parse(localStorage.getItem('patients')) || [];
        const table = document.getElementById('reportTable');
        patients.forEach(patient => {
            addPatientRow(patient);
        });
    }

    // Function to add a new patient row
    function addPatientRow(patient) {
        const table = document.getElementById('reportTable');
        const newRow = table.insertRow();
        Object.values(patient).forEach(value => {
            const cell = newRow.insertCell();
            if (value.startsWith('data:image')) { // If value is a data URL (for photo)
                const img = document.createElement('img');
                img.src = value;
                cell.classList.add('photo-column');
                cell.appendChild(img);
            } else {
                cell.textContent = value;
            }
        });

        // Add action buttons (delete, print)
        const actionCell = newRow.insertCell();

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.className = 'delete-btn';
        deleteButton.addEventListener('click', function() {
            const row = this.parentNode.parentNode;
            row.remove();
            updateLocalStorage();
            alert('Patient report has been deleted.');
        });
        actionCell.appendChild(deleteButton);

        const printButton = document.createElement('button');
        printButton.textContent = 'Print';
        printButton.className = 'print-btn';
        printButton.addEventListener('click', function() {
            printPatient(this.parentNode.parentNode);
        });
        actionCell.appendChild(printButton);
    }

    // Function to add a new patient
    function addPatient() {
        const form = document.getElementById('addPatientForm');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }
        const formData = new FormData(form);

        const photoInput = document.getElementById('photo');
        const photoFile = photoInput.files[0];
        if (photoFile) {
            const reader = new FileReader();
            reader.onload = function(e) {
                formData.append('photo', e.target.result);
                const patient = Object.fromEntries(formData.entries()); // Convert form data to object

                // Store patient data in localStorage
                const patients = JSON.parse(localStorage.getItem('patients')) || [];
                patients.push(patient);
                localStorage.setItem('patients', JSON.stringify(patients));

                // Add patient to the report
                addPatientRow(patient);
                alert('Patient report has been added.');
            }
            reader.readAsDataURL(photoFile);
        } else {
            const patient = Object.fromEntries(formData.entries()); // Convert form data to object

            // Store patient data in localStorage
            const patients = JSON.parse(localStorage.getItem('patients')) || [];
            patients.push(patient);
            localStorage.setItem('patients', JSON.stringify(patients));

            // Add patient to the report
            addPatientRow(patient);
            alert('Patient report has been added.');
        }
    }

    // Function to update localStorage after a patient is deleted
    function updateLocalStorage() {
        const table = document.getElementById('reportTable');
        const patients = [];
        for (let i = 1; i < table.rows.length; i++) {
            const patient = {};
            for (let j = 0; j < table.rows[i].cells.length - 1; j++) {
                const fieldName = table.rows[0].cells[j].textContent.toLowerCase();
                const value = table.rows[i].cells[j].textContent;
                patient[fieldName] = value;
            }
            patients.push(patient);
        }
        localStorage.setItem('patients', JSON.stringify(patients));
    }

    // Function to print patient details
    function printPatient(row) {
        const patientDetails = row.cells[0].textContent + ", " +
                                row.cells[1].textContent + ", " +
                                row.cells[2].textContent + ", " +
                                row.cells[3].textContent + ", " +
                                row.cells[4].textContent;

        const photoSrc = row.cells[5].querySelector('img').src; // Get photo source

        const printContent = '<div class="print-content"><img src="' + photoSrc + '" alt="Patient Photo"><h2>Patient Details:</h2><p>' + patientDetails + '</p></div>';

        const printWindow = window.open('', '', 'width=800,height=600');
        printWindow.document.write('<html><head><title>Patient Details</title></head><body>');
        printWindow.document.write(printContent);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
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
</body>
</html>











