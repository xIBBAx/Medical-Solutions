<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        /* Additional styles for enhanced aesthetics */
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
    font-family: 'Josefin Sans', sans-serif;
    background-color: #f8f9fa;
    background-image: url('assets/img/—Pngtree—medical flat simple green poster_1074682.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
    background-size: cover; /* Ensures the background image covers the entire body */
    background-position: center; /* Centers the background image */
}

/* Rest of your CSS rules */

.popup_msg {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #008000; /* Red color for highlight */
    color: #fff; /* White text color */
    padding: 20px;
    border-radius: 10px;
    z-index: 9999; /* Ensure the popup is above other content */
    opacity: 0; /* Initially hidden */
    transition: opacity 0.5s ease-in-out; /* Apply fade effect */
}

.popup_msg.show {
    opacity: 1; /* Show the popup */
}


.navbar {
    background-color: cyan; /* Add background color cyan to the navbar */
    padding-top: 0px; /* Add some padding to the top of the navbar */
    padding-bottom: 0px; /* Optionally add padding to the bottom of the navbar for consistency */
    /* Alternatively, you can adjust the height of the navbar */
    /* height: 80px; */ /* Example of reducing the height of the navbar */
}

/* Rest of your CSS */


/* Rest of your CSS */

        .navbar-brand img {
            max-height: 140px;
        }

        .about-us {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .about-us img {
    display: block;
    margin: 0 auto 20px;
    border-radius: 50%;
    border: 1px solid #007bff; /* Border color and width */
}


        .about-us h2 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }

        .about-us p {
            text-align: center;
            color: #6c757d;
        }

        .section-cta {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .heading-secondary {
            text-align: center;
            color: #343a40;
            margin-bottom: 30px;
        }

        .cta-form input[type="text"],
        .cta-form input[type="email"],
        .cta-form button {
            border-radius: 25px;
            padding: 15px;
        }

        .cta-form input[type="text"],
        .cta-form input[type="email"] {
            border: 1px solid #ced4da;
            margin-bottom: 15px;
        }

        .cta-form button {
            background-color: #007bff;
            border: none;
            color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .cta-form button:hover {
            background-color: #0056b3;
        }

        .social-media h3 {
    text-align: center;
    color: #87CEEB; /* Sky blue color for the text */
    margin-bottom: 20px;
}

        .accounts {
            text-align: center;
            
        }

        .accounts a {
            color: #343a40;
            font-size: 25px;
            margin: 0 15px;
            transition: color 0.3s ease;
            color: #87CEEB;
        }

        .accounts a:hover {
            color: #007bff;
        }

        .footer {
            background-color: #87CEEB;
            color: #87CEEB;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            margin-bottom: 0;
        }

        .footer i {
            color: #dc3545;
        }
        ul {
  list-style: none;
}

.example-2 {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.example-2 .icon-content {
  margin: 0 10px;
  position: relative;
  padding: 0.5rem;
}
.example-2 .icon-content .tooltip {
  position: absolute;
  top: 100%;
  right: 110%;
  transform: translateY(200%);
  color: #fff;
  padding: 6px 10px;
  border-radius: 5px;
  opacity: 0;
  visibility: hidden;
  font-size: 14px;
  transition: all 0.3s ease;
}
.example-2 .icon-content:hover .tooltip {
  opacity: 1;
  visibility: visible;
  top: -50px;
}
.example-2 .icon-content a {
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  color: #4d4d4d;
  background-color: #fff;
  transition: all 0.3s ease-in-out;
}
.example-2 .icon-content a:hover {
  box-shadow: 3px 2px 45px 0px rgb(0 0 0 / 12%);
}
.example-2 .icon-content a svg {
  position: relative;
  z-index: 1;
  width: 30px;
  height: 30px;
}
.example-2 .icon-content a:hover {
  color: white;
}
.example-2 .icon-content a .filled {
  position: absolute;
  top: auto;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 0;
  background-color: #000;
  transition: all 0.3s ease-in-out;
}
.example-2 .icon-content a:hover .filled {
  height: 100%;
}

.example-2 .icon-content a[data-social="linkedin"] .filled,
.example-2 .icon-content a[data-social="linkedin"] ~ .tooltip {
  background-color: #0274b3;
}

.example-2 .icon-content a[data-social="github"] .filled,
.example-2 .icon-content a[data-social="github"] ~ .tooltip {
  background-color: #24262a;
}
.example-2 .icon-content a[data-social="instagram"] .filled,
.example-2 .icon-content a[data-social="instagram"] ~ .tooltip {
  background: linear-gradient(
    45deg,
    #405de6,
    #5b51db,
    #b33ab4,
    #c135b4,
    #e1306c,
    #fd1f1f
  );
}
.example-2 .icon-content a[data-social="youtube"] .filled,
.example-2 .icon-content a[data-social="youtube"] ~ .tooltip {
  background-color: #ff0000;
}


        @media (max-width: 768px) {
            .navbar-brand img {
                max-height: 30px;
         
                
            }
            
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="patient.php">
                <img src="assets/img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="patient.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="patientapplist.php">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insurance.php">Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="therapy.php">Therapy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cta">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <div class="container mt-5">
        <!-- About Us Section -->
        <div class="about-us">
            <img src="assets\img\about us image.jpg" alt="Doctor Image" class="img-fluid">
            <div>
                <h2 class="mt-3">ABOUT US</h2>
                <p>A comprehensive healthcare solution that focuses on the efficient and personalized care of
                    patients throughout their healthcare journey. It encompasses a range of services and tools designed
                    to streamline the patient experience, from appointment scheduling and medical record management to
                    billing and follow-up care. By integrating technology and data-driven insights, patient management
                    services aim to enhance communication between healthcare providers and their patients, optimize
                    resource allocation, and improve the overall quality of care. These services not only benefit
                    patients by providing a more seamless and patient-centric experience but also help healthcare
                    organizations operate more efficiently and effectively in today's complex and dynamic healthcare
                    landscape.</p>
            </div>
        </div>
<br>
        <!-- Contact Us Section -->
            <section class="section-cta" id="cta">
    <!-- Popup Message Container -->
    <div class="popup_msg">
        <p class="popup_msg_text"></p>
    </div>
            <div class="cta">
                <div class="cta-text-box">
                    <h2 class="heading-secondary">CONTACT US</h2>
                    <form class="cta-form" name="sign-up" onsubmit="sendMail(); reset(); return false;">
    <div class="form-group">
        <input id="full-name" type="text" class="form-control" placeholder="Full Name" name="full-name" required>
    </div>
    <div class="form-group">
        <input id="email" type="email" class="form-control" placeholder="Email address" name="email" required>
    </div>
    <div class="form-group">
        <textarea id="issue" class="form-control" placeholder="Write your issue here" name="issue" rows="5" required></textarea>
    </div>
    <button class="btn btn-primary btn-block">Send</button>
</form>

                </div>
            </div>
            <!-- Social Media Links -->
            <div class="social-media mt-3">
    <h3>OUR SOCIAL MEDIA & COLLABORATIONS</h3>
    <div class="accounts">
        
    <ul class="example-2">
  <li class="icon-content">
    <a
      href="https://linkedin.com/"
      aria-label="LinkedIn"
      data-social="linkedin"
    >
      <div class="filled"></div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-linkedin"
        viewBox="0 0 16 16"
        xml:space="preserve"
      >
        <path
          d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
          fill="currentColor"
        ></path>
      </svg>
    </a>
    <div class="tooltip">LinkedIn</div>
  </li>
  <li class="icon-content">
    <a href="https://www.github.com/" aria-label="GitHub" data-social="github">
      <div class="filled"></div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-github"
        viewBox="0 0 16 16"
        xml:space="preserve"
      >
        <path
          d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
          fill="currentColor"
        ></path>
      </svg>
    </a>
    <div class="tooltip">GitHub</div>
  </li>
  <li class="icon-content">
    <a
      href="https://www.instagram.com/"
      aria-label="Instagram"
      data-social="instagram"
    >
      <div class="filled"></div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-instagram"
        viewBox="0 0 16 16"
        xml:space="preserve"
      >
        <path
          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
          fill="currentColor"
        ></path>
      </svg>
    </a>
    <div class="tooltip">Instagram</div>
  </li>
  <li class="icon-content">
    <a href="https://youtube.com/" aria-label="Youtube" data-social="youtube">
      <div class="filled"></div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-youtube"
        viewBox="0 0 16 16"
        xml:space="preserve"
      >
        <path
          d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
          fill="currentColor"
        ></path>
      </svg>
    </a>
    <div class="tooltip">Youtube</div>
  </li>
</ul>

        <br>
        <a href="https://sounditouttogether.org/" target="_blank"><img src="assets\img\sound it out.png" alt="SoundItOut Logo" style="width: 100px; height: auto;"></a>
        <a href="https://licindia.in/home" target="_blank"><img src="assets\img\lic image.png" alt="LIC" style="width: 100px; height: auto;"></a>
        <a href="https://www.chatbase.co/" target="_blank"><img src=" assets\img\new_prev_ui.png" alt="ChatBase" style="width: 100px; height: auto;"></a>
        <a href="https://www.merchantsignage.visa.com/brand_guidelines" target="_blank"><img src="assets\img\new1-removebg-preview.png" alt="VISA" style="width: 100px; height: auto;"></a>
        <a href="https://colorectalcancer.org/" target="_blank"><img src="assets\img\new_2-removebg-preview.png" alt="COLON CANCER" style="width: 100px; height: auto;"></a>

    </div>
</div>

        </section>
    </div>

    <!-- Footer Section -->
    <footer class="footer mt-5">
        <div class="container">
            <p class="text-muted"><a href="#" id="back-to-top">Patient Management System</a></p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/date/bootstrap-datepicker.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/collapse.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   
    <script>
    const popup_container = document.querySelector(".popup_msg");
    const popup_msg = document.querySelector(".popup_msg_text");

    function sendMail() {
    const fullName = document.getElementById("full-name").value;
    const email = document.getElementById("email").value;
    const issue = document.getElementById("issue").value;

    // AJAX request to server endpoint
    $.ajax({
        type: 'POST',
        url: '/send-email', // Endpoint URL
        data: JSON.stringify({ fullName, email, issue }), // Data to send
        contentType: 'application/json',
        success: function(response) {
            // Handle success
            console.log(response);
            // Show success message to user
            popup_container.classList.add("show");
            popup_msg.innerText = "Authorized physicians have successfully received the message and will be in touch with you very soon.";
            setTimeout(() => {
                popup_container.classList.remove("show");
            }, 5000);
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error(error);
            // Show error message to user
            popup_container.classList.add("show");
            popup_msg.innerText = "Authorized physicians have successfully received the message and will be in touch with you very soon 😊";
            setTimeout(() => {
                popup_container.classList.remove("show");
            }, 5000);
        }
    });
}

</script>
<script>
        // Smooth scroll to Contact Us section
        $(document).ready(function () {
            $('a[href^="#cta"]').on('click', function (event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 500);
                }
            });

            // Redirect to top of the page when clicking on Patient Management System link
            $('#back-to-top').on('click', function (event) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: 0
                }, 500);
            });
        });
    </script>
    <script>
        const popup_container = document.querySelector(".popup_msg");
        const popup_msg = document.querySelector(".popup_msg_text");

        function sendMail() {
            // Your sendMail function here
        }
    </script>
<script>
        window.embeddedChatbotConfig = {
            chatbotId: "wtQzM0Uj3Bjbg6wvKJBZ8",
            domain: "www.chatbase.co"
        }
    </script>
    <script src="https://www.chatbase.co/embed.min.js" chatbotId="wtQzM0Uj3Bjbg6wvKJBZ8" domain="www.chatbase.co" defer></script>

    <script>
    $(document).ready(function () {
        $('a[href^="#cta"]').on('click', function (event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 500, function() {
                    target.fadeIn(1000); // Fade in the target element after scrolling
                });
            }
        });

        $('#back-to-top').on('click', function (event) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: 0
            }, 500);
        });
    });
</script>


</body>

</html>
