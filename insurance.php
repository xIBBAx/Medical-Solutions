<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health Insurance | Medical Solutions</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts - Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .policy-details {
            display: none;
            transition: opacity 0.5s ease; /* Smooth transition effect */
        }

        .show-details {
            display: block !important; /* Override display property to show details */
        }

        body {
            font-family: 'Ubuntu', sans-serif;
            background: linear-gradient(to bottom, #87CEEB 0%, #007bff 100%);
        }

        #bg-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
        }

        .container {
            margin-top: 100px; /* Adjust the margin-top value to move the container higher on the page */
            position: relative;
            z-index: 1;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 20px;
            margin-bottom: 1px; /* Add margin bottom to create a gap */
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card-text {
            font-size: 16px;
            line-height: 1.6;
        }

        .logo-img {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .logo-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .footer {
            color: #00000;
            text-align: center;
        }

        .policy-details {
            display: none;
            flex: 1;
            border: 1px #ddd;
            padding: 20px;
            margin: 10px;
        } /* Hide policy details by default */
/* Hide policy details by default */
.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 8px 10px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    background-color: #fff; /* Add white background for glossiness */
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 10px rgba(0, 0, 0, 0.15), 0 3px 6px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>

<video autoplay loop muted id="bg-video">
<source src="assets\img\Pehle LIC.mp4" type="video/mp4">

    Your browser does not support the video tag.
</video>

<div class="container">
    <div class="logo-container">
    <a href="patient.php"> <!-- Replace "your-link-here.html" with your desired URL -->
    <img src="assets/img/logoddd.png" alt="Medical Solutions Logo" class="logo-img mx-auto d-block">
</a>
<a href="https://licindia.in/web/guest/history"> <!-- Replace "your-link-here.html" with your desired URL -->
    <img src="assets/img/lic image.png" alt="Second Logo" class="logo-img mx-auto d-block">
</a>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><strong>Health Insurance</strong></h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">LIC Health Insurance Plan</h5>
            <p class="card-text">
                LIC offers comprehensive health insurance plans tailored to meet your needs, providing coverage for medical expenses, hospitalization, surgeries, and more. Benefits include:
            </p>
            <ul class="card-text">
                <li>Wide network of hospitals for cashless treatment</li>
                <li>Coverage for pre-existing illnesses after a waiting period</li>
                <li>Optional riders for additional coverage</li>
                <li>Renewability for lifelong protection</li>
            </ul>
            <button class="btn btn-primary" id="toggleDetails">Learn More</button>
            <br>
            <div class="policy-details">
                <br>
                <h4><strong>Insurance Policy Plan Details</strong></h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/img/LIC_Jeevan_Akshay_VII-removebg-preview.png" class="card-img-top" alt="Policy 1">
                            <div class="card-body">
                                <h5 class="card-title">LIC Jeevan Akshay VII:</h5>
                                <p class="card-text">LIC Jeevan Akshay VII is an immediate annuity plan that offers a variety of annuity options to provide financial security for life.</p>
                                <p class="card-text"><strong>Expiry date:</strong> No specific expiry date, as it provides annuity payments for the lifetime of the policyholder.</p>
<p class="card-text"><strong>How to avail the policy:</strong> Individuals can avail this policy by visiting the LIC branch or through authorized LIC agents.</p>
<p class="card-text"><strong>Validation of policy:</strong> The policy remains valid as long as the premiums are paid on time and other policy terms and conditions are met.</p>

                                <a href="https://licindia.in/lic-s-jeevan-akshay-vii-plan-no.-857-uin-512n337v03-" class="btn btn-success">Avail the Policy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/img/LIC_New_Jeevan_Anand-removebg-preview.png" class="card-img-top" alt="Policy 2">
                            <div class="card-body">
                                <h5 class="card-title">LIC New Jeevan Anand:</h5>
                                <p class="card-text">LIC New Jeevan Anand is a non-linked, with-profits endowment plan that provides a combination of protection and savings.</p>
                                <p class="card-text"><strong>Expiry date: </strong>The maturity period typically ranges from 15 to 35 years, depending on the policyholder's chosen term.</p>
                                <p class="card-text"><strong>How to avail the policy: </strong>Interested individuals can avail this policy by filling out the necessary forms and submitting the required documents at the nearest LIC branch.</p>
                                <p class="card-text"><strong>Validation of policy:</strong> The policy remains valid as long as the premiums are paid regularly and the policyholder adheres to the terms and conditions of the policy.</p>
                                <a href="https://licindia.in/?utm_source=Google&utm_medium=CPC&utm_campaign=Search-Brand-LIC-Main-Page-PD&gad_source=1&gclid=Cj0KCQiArrCvBhCNARIsAOkAGcWAu3-MoVEEQMPaTg6QhCR_unBHqTfW3LpXT63wzhyYc9H-LBEgNesaAuj6EALw_wcB" class="btn btn-success">Avail the Policy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/img/LIC_Jeevan_Umang-removebg-preview.png" class="card-img-top" alt="Policy 3">
                            <div class="card-body">
                                <h5 class="card-title">LIC Jeevan Umang:</h5>
                                <p class="card-text"> LIC Jeevan Umang is a whole life insurance plan that offers a combination of income and protection.</p>
                                <p class="card-text"><strong>Expiry date: </strong>The policy continues for the entire lifetime of the policyholder and provides coverage until death.</p>
                                <p class="card-text"><strong>How to avail the policy:</strong>  Individuals can avail this policy by visiting the nearest LIC branch or contacting an authorized LIC agent.</p>
                                <p class="card-text"><strong>Validation of policy: </strong>The policy remains valid throughout the lifetime of the policyholder, provided premiums are paid regularly and other policy terms are met.</p>
                                <a href="https://licindia.in/lics-jeevan-umang-plan-no.-945-uin-no.-512n312v02-" class="btn btn-success">Avail the Policy</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add two more policy cards -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/img/LIC_Tech_Term-removebg-preview.png" class="card-img-top" alt="Policy 4">
                            <div class="card-body">
                                <h5 class="card-title">LIC Tech Term:</h5>
                                <p class="card-text">LIC Tech Term is a non-linked, non-participating pure protection online term assurance policy that provides financial protection to the policyholder's family in case of an unfortunate event.</p>
                                <p class="card-text"><strong>Expiry date:</strong>  The policy term can vary from 10 to 40 years, depending on the policyholder's choice.</p>
                                <p class="card-text"><strong>How to avail the policy:</strong> Interested individuals can avail this policy online through the LIC website or authorized online platforms.</p>
                                <p class="card-text"><strong>Validation of policy:</strong> The policy remains valid for the chosen term, provided premiums are paid regularly and other policy terms are fulfilled.</p>
                                <a href="https://licindia.in/tech-term?&utm_source=google_Search&utm_medium=CPC&utm_campaign=Tech_Term__PD_google_Search_Brand&gad_source=1&gclid=Cj0KCQiArrCvBhCNARIsAOkAGcX9i4ZGMi0gZi1UOFe69Eqa717QWx-hTykBL5E45WOxC26LqCgWOX4aAkiAEALw_wcB" class="btn btn-success">Avail the Policy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/img/LICs-Arogya-Rakshak_Featured-image_SA-removebg-preview (1).png" class="card-img-top" alt="Policy 5">
                            <div class="card-body">
                                <h5 class="card-title">LIC Arogya Rakshak:</h5>
                                <p class="card-text"> Fixed benefit health insurance plan covering hospitalization expenses.</p>
                                <p class="card-text"><strong>Expiry date:</strong> Policy term ranges from 5 to 40 years.</p>
                                <p class="card-text"><strong>How to avail the policy:</strong> Apply online through the LIC website or authorized platforms.</p>
                                <p class="card-text"><strong>Validation of policy:</strong>  Remains valid for the chosen term with regular premium payments.</p>
                                <a href="https://licindia.in/health-plans" class="btn btn-success">Avail the Policy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/img/LIC_Cancer_Cover-removebg-preview.png" class="card-img-top" alt="Policy 6">
                            <div class="card-body">
                                <h5 class="card-title">LIC Cancer Cover:</h5>
                                <p class="card-text">LIC Cancer Cover is a non-linked, regular premium payment health insurance plan that provides financial protection in case of cancer diagnosis.</p>
                                <p class="card-text"><strong>Expiry date:</strong> The policy term can range from 10 to 30 years, depending on the policyholder's choice.</p>
                                <p class="card-text"><strong>How to avail the policy:</strong> Interested individuals can avail this policy by visiting the LIC branch or contacting an authorized LIC agent.</p>
                                <p class="card-text"><strong>Validation of policy:</strong> The policy remains valid for the chosen term, provided premiums are paid regularly and other policy terms are fulfilled.</p>
                                <a href="https://licindia.in/lic-s-cancer-cover-plan-no.-905-uin-512n314v02-" class="btn btn-success">Avail the Policy</a>
                                <div class="policy-details">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <div class="row">
        <!-- Policy cards here -->
    </div>


<footer class="footer" id="disclaimer">
    <div class="container">
        <p><strong>Disclaimer: This website is operated by Medical Solutions in collaboration with LIC. Medical Solutions is not an insurance provider but offers information about insurance plans. Our hospital was established in 2023 and is not liable for any insurance-related matters. For detailed policy terms and conditions, please refer to the LIC official website.</strong></p>
    </div>
</footer>

<div class="text-center">
    <p><strong>&copy; Medical Solutions. All rights reserved.</strong></p>
</div>



<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
    $("#toggleDetails").click(function() {
        $(".policy-details").slideToggle("slow");
        $("#disclaimer").toggle(); // Toggle disclaimer visibility
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
    $(document).ready(function() {
        $("#toggleDetails").click(function() {
            $(".policy-details").toggleClass("show-details"); // Toggle the class to show/hide details
        });
    });
</script>

</body>
</html>



