<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapy Lists</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif;
            background-image: url('assets/img/healthy-food-right-medicine-flu.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* height: 100vh; */
            opacity: 0;
            animation: fadeInBackground 2s forwards;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
        }

        @keyframes fadeInBackground {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
            opacity: 0;
            animation: fadeInContainer 2s forwards;
        }

        @keyframes fadeInContainer {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .therapist {
            width: 250px;
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .therapist:hover {
            transform: translateY(-5px);
        }

        .therapist img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor : pointer;
        }

        .book-now-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .book-now-btn:hover {
            background-color: #0056b3;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
    background-color: #fefefe; /* Background color for fallback */
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 1000px;
    border-radius: 5px;
    background-image: url('assets/img/representation-human-brain-as-plant-tree-pot.jpg'); /* Specify the URL of the background image */
    background-size: cover; /* This will resize the image to cover the entire element */
    background-position: center; /* This positions the image in the center */
    background-repeat: no-repeat; /* This prevents the image from repeating */
}


        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .logo {
            width: 200px; /* Adjust the width as needed */
            margin: 20px auto; /* Center the logo horizontally */
            text-align: center; /* Center the logo image within the div */
        }

        .logo-container {
            display: flex;
            justify-content: space-between; /* Distribute items along the main axis with space between them */
            width: 80%; /* Adjust the width of the container as needed */
        }

        .logo {
            width: 200px; /* Adjust the width as needed */
        }

        .logo img {
            width: 100%;
        }
        .tooltip {
            position: absolute;
            background-color: #333;
            color: #fff;
            padding: 5px;
            border-radius: 3px;
            display: none; /* Hide tooltip by default */
            z-index: 1000;
        }
        .modal-content * {
    color: black; /* Sky blue text color */
     /* Glossy shadow effect using white color */
    -webkit-text-fill-color: solid black; /* Ensuring sky blue fill color with text stroke */
    font-size: 18px; /* Increase the text size to 18px, adjust as needed */
    cursor:pointer

}
 /* Set the font for the buttons to Josefin Sans */
 .submit-btn, .book-now-btn {
        font-family: 'Josefin Sans', sans-serif;
    }

    /* Styling for the submit button */
    .submit-btn {
        background-color: lightgray; /* Initial background color */
        color: black;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    /* When the submit button is clicked, it turns green */
    .submit-btn:active {
        background-color: green;
    }
    #specialistName, #specialistDetails, #specialistDescription1, #experience, #achievements, #fee {
    text-align: center; /* Center the text within the div */
    color: solid black; /* Solid black color for text */
    -webkit-text-fill-color: solid black; /* Ensuring solid black fill color */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Text shadow: 2px right, 2px down, 4px blur, black color */
}

    </style>
</head>
<body>
<div class="logo-container">
        <div class="logo">
        <a href="therapy.php">
            <img src="assets\img\logoddd.png" alt="Logo">
        </div>
        <div class="logo">
    <a href="music_recommendation.php" title="To view something interesting on SoundItOut, click here."> <!-- Anchor tag with title attribute -->
        <img src="assets\img\sound it out.png" alt="Logo">
    </a>
</div>
<div id="tooltip" class="tooltip"></div>
    </div>
    <div id="page1" class="container">
        <!-- Therapists -->
        <?php
        include '../assets/conn/dbconnect.php';

        $select = "SELECT * FROM therapist";
        $queryRun = mysqli_query($con, $select);

        if (mysqli_num_rows($queryRun) > 0) {
            while ($row = mysqli_fetch_assoc($queryRun)) {
                echo "<div class='therapist' onclick=\"showDetails('{$row['id']}', '{$row['name']}', '{$row['specialist']}', '{$row['video']}', '{$row['therapy_profile']}','{$row['specialist_description_1']}','{$row['experience']}','{$row['achievements']}','{$row['fee']}')\">
                <img src='uploads/{$row['therapy_profile']}' alt='Therapist Image'>
                <h2>{$row['name']}</h2>
                <p>{$row['specialist']}</p>
                <p>{$row['specialist_description']}</p>
                <p>{$row['fee']}</p>
                <button class='book-now-btn' onclick=\"openPaymentModal('{$row['id']}', '{$row['name']}', '{$row['specialist']}')\">Book Now</button>
            </div>";
            
            }
        } else {
            echo "<p>No results found</p>";
        }
        ?>
    </div>

    <!-- Specialist Details Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="specialistName"></h2>
            <p id="specialistDetails"></p>
            <p id="specialistDescription"></p>
            <p id="specialistDescription1"></p>
            <p id="experience"></p>
            <p id="achievements"></p>
            <p id="fee"></p>





            <div style="display:flex; gap:10px;">
                <iframe style = "width : 50%" id="videoPlayer" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <img id="specialistImage" style = "width : 50%" src="" alt="Specialist Image">
            </div>
        </div>
    </div>

    <!-- Payment Modal -->
    <div id="paymentModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closePaymentModal()">&times;</span>
        <h2>Make Payment & Answer the Questions</h2>
        <form id="rzp-payment-form">
            <input type="text" id="name" placeholder="Name">
            <input type="number" id="amount" placeholder="Amount">
<br>
            <input type="email" id="email" placeholder="Email">
            <input type="number" id="age" placeholder="Age">

            <br>
<br>
            <div class="question">
                <label for="therapyBefore">Have you been in therapy before?</label><br>
                <input type="radio" id="therapyBeforeYes" name="therapyBefore" value="yes">
                <label for="therapyBeforeYes">Yes</label><br>
                <input type="radio" id="therapyBeforeNo" name="therapyBefore" value="no">
                <label for="therapyBeforeNo">No</label><br>
            </div>
<br>
            <div class="question">
                <label for="urgentIssues">Are you currently experiencing any urgent or severe issues?</label><br>
                <input type="radio" id="urgentIssuesYes" name="urgentIssues" value="yes">
                <label for="urgentIssuesYes">Yes</label><br>
                <input type="radio" id="urgentIssuesNo" name="urgentIssues" value="no">
                <label for="urgentIssuesNo">No</label><br>
            </div>
<br>
            <div class="question">
                <label for="medicalMentalDiagnoses">Do you have any medical or mental health diagnoses?</label><br>
                <input type="radio" id="medicalMentalDiagnosesYes" name="medicalMentalDiagnoses" value="yes">
                <label for="medicalMentalDiagnosesYes">Yes</label><br>
                <input type="radio" id="medicalMentalDiagnosesNo" name="medicalMentalDiagnoses" value="no">
                <label for="medicalMentalDiagnosesNo">No</label><br>
            </div>
<br>
            <div class="question">
                <label for="takingMedications">Are you taking any medications for mental health or other reasons?</label><br>
                <input type="radio" id="takingMedicationsYes" name="takingMedications" value="yes">
                <label for="takingMedicationsYes">Yes</label><br>
                <input type="radio" id="takingMedicationsNo" name="takingMedications" value="no">
                <label for="takingMedicationsNo">No</label><br>
            </div>
<br>
            <div class="question">
                <label for="seenHealthcareProviders">Have you seen other healthcare providers for your current concerns?</label><br>
                <input type="radio" id="seenHealthcareProvidersYes" name="seenHealthcareProviders" value="yes">
                <label for="seenHealthcareProvidersYes">Yes</label><br>
                <input type="radio" id="seenHealthcareProvidersNo" name="seenHealthcareProviders" value="no">
                <label for="seenHealthcareProvidersNo">No</label><br>
            </div>
<br>
            <div class="question">
                <label for="currentSupportSystems">What are your current support systems?</label><br>
                <input type="radio" id="currentSupportSystemsStrong" name="currentSupportSystems" value="strong">
                <label for="currentSupportSystemsStrong">Strong</label><br>
                <input type="radio" id="currentSupportSystemsWeak" name="currentSupportSystems" value="weak">
                <label for="currentSupportSystemsWeak">Weak</label><br>
            </div>
<br>
            <div class="question">
                <label for="therapistApproach">Do you have any preferences for the therapist's approach?</label><br>
                <input type="radio" id="therapistApproachYes" name="therapistApproach" value="yes">
                <label for="therapistApproachYes">Yes</label><br>
                <input type="radio" id="therapistApproachNo" name="therapistApproach" value="no">
                <label for="therapistApproachNo">No</label><br>
            </div>
<br>
            <div class="question">
                <label for="availability">Are there any particular times or days you are available for appointments?</label><br>
                <input type="radio" id="availabilityYes" name="availability" value="yes">
                <label for="availabilityYes">Yes</label><br>
                <input type="radio" id="availabilityNo" name="availability" value="no">
                <label for="availabilityNo">No</label><br>
            </div>
<br>
            <div class="question">
                <label for="serviceSource">How did you hear about my services?</label><br>
                <input type="text" id="serviceSource" name="serviceSource" placeholder="e.g. Internet search, referral">
            </div>
<br>
<button type="submit" class="submit-btn">Submit</button> <!-- Submit button -->
            <button id="rzp-button" class="book-now-btn">Pay Now</button> <!-- Existing Pay Now button -->
        </form>
    </div>
</div>


    <!-- Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        // Show specialist details and play video in modal
        function showDetails(id, name, specialist, video, image, specialistdescription,exp,achievement,feee) {
            alert("By accepting the Terms and Conditions of Medical Solutions, you consent to being recorded.");
        
            var modal = document.getElementById("myModal");
            var nameElement = document.getElementById("specialistName");
            var detailsElement = document.getElementById("specialistDetails");
            var imageElement = document.getElementById("specialistImage");
            var videoPlayer = document.getElementById("videoPlayer");
            var specialistDescription1 = document.getElementById("specialistDescription1");
            var experience = document.getElementById("experience");
            var achievements = document.getElementById("achievements");
            var fee = document.getElementById("fee");



            
            nameElement.textContent = name;
            detailsElement.textContent = "Specialist: " + specialist;
            specialistDescription1.innerHTML = "A brief overview of the doctor: " + specialistdescription;
            experience.innerHTML = "Experience: " + exp;
            achievements.innerHTML = "Achievements: " + achievement;
            fee.innerHTML = "Fee Requirement:" + feee;
            imageElement.src = `uploads/${image}`;
            videoPlayer.src = video;

            modal.style.display = "block";
        }

        // Close modal
        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        // Close modal when clicking outside the modal
        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                closeModal();
            }
        }

        // Function to open payment modal
        function openPaymentModal(id, name, specialist) {
            var paymentModal = document.getElementById("paymentModal");
            var nameInput = document.getElementById("name");
            var amountInput = document.getElementById("amount");

            // Pre-fill the name and amount fields
            nameInput.value = name;
            amountInput.value = 1000; // Example amount for the therapy session (in cents/paise)

            paymentModal.style.display = "block";
        }

        // Function to close payment modal
        function closePaymentModal() {
            var paymentModal = document.getElementById("paymentModal");
            paymentModal.style.display = "none";
        }

        // Razorpay integration
        var options = {
            key: 'rzp_test_DKpFlXNG48IVDH', // Replace with your Razorpay Key ID
            amount: 100000, // Example amount in paise (₹1000)
            currency: 'INR',
            name: 'Therapy Lists',
            description: 'Therapy Session Payment',
            handler: function(response) {
                alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
            }
        };

        document.getElementById('rzp-button').addEventListener('click', function(e) {
            e.preventDefault();
            var rzp = new Razorpay(options);
            rzp.open();
        });

        // Fade in effect after the page loads
        window.onload = function() {
            document.body.style.opacity = '1';
        };
    </script>
<script>
        // Get the logo link element
        const logoLink = document.getElementById('assets/img/sound it out.png');

        // Function to display the click message
        function displayClickMessage(event) {
            // Prevent the default behavior of the link (redirection)
            event.preventDefault();

            // Display the message
            alert('Click here to reveal something interesting on SoundItOut!');
        }

        // Add click event listener to the logo link
        logoLink.addEventListener('click', displayClickMessage);
    </script>
</body>
</html>
