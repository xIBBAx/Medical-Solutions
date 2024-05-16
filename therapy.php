<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Solutions Therapy Session</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 0;
            padding: 0;
            opacity: 0;
            animation: fadeIn 0.5s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            border-bottom: 2px solid black;
        }

        /* Container */
        .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    border: 3px solid gold; /* Gold border */
    text-align: center;
    color: #000;
    padding: 20px;
    background-image: url('assets/img/bg16.jpg');
    background-size: cover; /* Ensures the image covers the entire container */
    background-position: center; /* Centers the image within the container */
    
    /* Adding a box shadow */
    box-shadow: 0 0 10px 3px #000; /* Matte black shadow */
}


.button {
    display: inline-block;
    padding: 10px 20px;
    /* Use a solid background color with opacity for contrast */
    background-color: rgba(255, 255, 255, 0.8); /* White with 80% opacity */
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s;

    /* Add solid white border */
    border: 2px solid white;

    /* Set text properties */
    color: black; /* Text color is black */
    font-weight: bold; /* Text is bold */
    font-style: italic; /* Text is italic */
    font-family: 'Josefin Sans', sans-serif; /* Font family set to Josefin Sans */

    /* Optional: Add text shadow for extra readability */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Subtle black shadow */
    cursor: pointer; /* Hand icon when hovering */

}





        .button:hover {
            background-color: #ADD8E6;
        }

        .learn-more-section {
    display: none; /* Initially hidden */
    margin-top: 20px;
    text-align: left;
    border-top: 1px solid #ccc;
    padding-top: 10px;
    max-height: 0; /* Initially set max-height to 0 */
    overflow: hidden; /* Prevent content overflow */
    opacity: 0; /* Initially set opacity to 0 */
    transition: opacity 0.5s ease-in-out, max-height 0.5s ease-in-out; /* Smooth transition for opacity and max-height */
}
.learn-more-section.visible {
    display: block; /* Make the section visible */
    opacity: 1; /* Set opacity to 1 */
    max-height: 500px; /* Adjust max-height as needed for visible content */
}
        #acceptTerms:hover {
    cursor: pointer; /* Hand icon when hovering */
}
        /* Show the Learn More section with opacity and height */
        .learn-more-section.visible {
            display: block;
            opacity: 1;
            max-height: 500px; /* Adjust this height as needed */
        }

        footer {
            background-color: #000000;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Logos */
        .logo {
            position: absolute;
            top: 120px;
            left: 0;
            width: 200px;
            height: auto;
        }

        .second-logo {
            position: absolute;
            top: 140px;
            right: 0;
            width: 200px;
            height: auto;
        }

        /* Background video */
        .bg-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }

        .bg-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .show-video {
            opacity: 1 !important;
        }
    </style>
</head>

<body>
    <header style="background-color: #191f22; padding: 20px 0; text-align: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); position: relative; border-bottom: 2px solid black;">
        <a href="patient.php">
            <img src="assets/img/logo.png" alt="Logo" class="logo">
        </a>
        <a href="https://sounditouttogether.org/">
            <img src="assets/img/sound it out.png" alt="Second Logo" class="second-logo">
        </a>
        <h1 style="color: white; text-shadow: 2px 2px 4px #000000;">Medical Solution Presents</h1>
        <h1 style="color: white; text-shadow: 2px 2px 4px #000000;">Therapy Session</h1>
    </header>

    <div class="bg-video">
        <video autoplay muted loop>
            <source src="assets/img/Howie and the Howl _ Middle School Mental Health _ Ad Council.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="container">
        <h2>Welcome to Your Therapy Session</h2>
        <h2>Medical Solutions X SounditOUT</h2>
        <p>This is a safe space where you can discuss your thoughts and feelings with a trained therapist. Your privacy and confidentiality are our top priorities.</p>
        <p>Please make yourself comfortable, and when you're ready, your therapist will join the session.</p>

        <!-- "Learn More" Button -->
        <button class="button" title="Click here for more information" onclick="toggleLearnMore()">Learn More</button>

        <!-- Hidden section for information, terms, and policies -->
        <div class="learn-more-section" id="learnMoreSection">
            <h3>Terms and Policies</h3>
            <p>Please review the following information, terms, and policies:</p>
            <ul>
                <li>All therapy sessions are confidential.</li>
                <li>Please be respectful of the therapist and other participants.</li>
                <li>Sessions are monitored for quality assurance.</li>
                <!-- Add more terms and policies as needed -->
            </ul>
            <!-- Checkbox for acceptance -->
            <input type="checkbox" id="acceptTerms" onchange="toggleStartButton()"> I accept the terms and policies.
        </div>

        <!-- "Start Session" Button -->
        <a href="therapylist.php" class="button" id="startSessionButton" style="display: none;">Start Session</a>
        <p>#MentalHealthMatters #TherapyIsHealing #YouAreNotAlone</p>
    </div>


<footer>
  <p>Contact us at <a href="mailto:medicalsolutions100001@example.com">medicalsolutions100001@example.com</a> for any inquiries or assistance.</p>
</footer>

<script>
function startTherapySession() {
  // Add your logic to start the therapy session here
  alert("Stay tuned for upcoming collaborations with specialists and therapists from around the globe as we continue to expand our website. Exciting developments are on the horizon! COMING SOON!");
}

// Function to show the video after a smooth fade in
function showVideo() {
  document.querySelector('.bg-video').classList.add('show-video');
}

// Listen for page load and show the video
document.addEventListener('DOMContentLoaded', function() {
  setTimeout(showVideo, 1000); // Delay the video display by 1 second for a smooth transition
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
function toggleLearnMore() {
    const learnMoreSection = document.getElementById('learnMoreSection');
    learnMoreSection.classList.toggle('visible');
}


        // Function to enable/disable the Start Session button based on checkbox state
        function toggleStartButton() {
            const acceptTermsCheckbox = document.getElementById('acceptTerms');
            const startSessionButton = document.getElementById('startSessionButton');
            startSessionButton.style.display = acceptTermsCheckbox.checked ? 'inline-block' : 'none';
        }
    </script>
</body>
</html>
