<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <title>Kweesha Capital</title>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function closeMobileMenu() {
                const navbarCollapse = document.querySelector(".navbar-collapse");
                if (navbarCollapse.classList.contains("show")) {
                    navbarCollapse.classList.remove("show");
                }
            }
            const menuLinks = document.querySelectorAll(".menu .nav-link");
            menuLinks.forEach(function(link) {
                link.addEventListener("click", closeMobileMenu);
            });
        });
    </script>

</head>

<body id="style-16">

    <!--================= Progress bar on scroll window ======================-->
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>

    <!--============  Navbar section start ===================-->
    <header className="p-2 fixed shadow">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a href="index.html"><img src="images/kweesha_capital_logo.svg" class="img-fluid navbar-brand" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu">
                        <li class="nav-item">
                            <a class="nav-link active me-3" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3" aria-current="page" href="#Solutions">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3" aria-current="page" href="#case_studies">Case studies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3" aria-current="page" href="#about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3" aria-current="page" href="#contact">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--============  Navbar section end ===================-->

    <!--============ Hero section start ===================-->
    <div class="Hero_section section" id="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/kweesha_hero.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption">
                        <h5 class="text-center" style="font-family: 'Inter', sans-serif; font-weight: 900;">Welcome to Kweesha Capital</h5>
                        <p class=" mx-auto" style="font-family: 'Inter', sans-serif; font-weight: 500;"> Your personal think tank for success. Our mission is not merely to assist
                            but to revolutionize the way you conduct your lending operations.</p>
                        <a href="#Solutions"><button class="button-2">Get Started</button></a>
                    </div>
                </div>
                <div class="carousel-item dn">
                    <img src="images/kweesha_hero_2.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption">
                        <h5 class="text-center" style="font-family: 'Inter', sans-serif; font-weight: 900;">Welcome to Kweesha Capital</h5>
                        <p class=" mx-auto" style="font-family: 'Inter', sans-serif; font-weight: 500;">We strive to create a better, more accessible financial environment for
                            small businesses and individual borrowers, enhancing not just the lending process but also
                            the overall financial landscape.</p>
                        <a href="#Solutions"><button class="button-2">Get Started</button></a>
                    </div>
                </div>
                <div class="carousel-item dn">
                    <img src="images/kweesha_hero_3.jpg" class="d-block w-100 img-fluid " alt="...">
                    <div class="carousel-caption">
                        <h5 class="text-center" style="font-family: 'Inter', sans-serif; font-weight: 900;">Welcome to Kweesha Capital</h5>
                        <p class=" mx-auto" style="font-family: 'Inter', sans-serif; font-weight: 500;">Through our services, we aim to shine a light on the hidden growth
                            opportunities often overlooked when businesses are merely focused on survival.</p>
                        <a href="#Solutions"><button class="button-2">Get Started</button></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

    </div>

    <!--============  Hero section end ===================-->

    <!--===================== Solutions Section start ========================-->
    <div class="Soulutions_Section section common-section" id="Solutions">

        <div class="section-title text-center p-5">
            <h1 class="mt-5 text-uppercase" style="font-family: 'Inter', sans-serif; font-weight: 900;">Solutions</h1>
            <img src="images/kweesha_home_logo.svg" alt="" class=" mx-auto d-block">
            <p class="fs-5">Streamlining lead generation and refining financial models</p>
        </div>

        <div class="container-fluid m-0 p-0">
            <div class="bg-gradient-div  d-flex justify-content-center align-items-center">
                <div class="row d-flex justify-content-center  container">
                    <div class="col-md-5  d-flex align-items-start align-items-center">
                        <div class="image-section py-4">
                            <img src="./images/about9.jpg" alt="" />
                        </div>
                    </div>

                    <div class="col-md-7 text-white d-flex flex-column justify-content-start align-items-center">
                        <h2 class="text-white py-4">
                            Elevate Your Business To New Heights With Our Innovative Financial
                            Solutions
                        </h2>
                        <p class="text-white">
                            At KweeshaCapital, our innovative financial solutions are designed
                            with one goal in mind - to elevate your business to new heights.
                            Our team of financial experts and analysts are adept at
                            streamlining lead generation, refining financial models, and
                            optimizing every segment of your operations.
                        </p>
                        <p class="text-white">
                            We dive deep into the undercurrents of your business, identifying
                            areas where growth opportunities are lost, and apply our unique
                            analytical approach to maximize your potential.
                        </p>
                        <p class="text-white">
                            In doing so, we help you not just to survive, but thrive - paving
                            the way for a healthier, more transparent, and efficient lending
                            environment for all parties involved.
                        </p>
                        <div class="mt-5 button_about ">
                            <button class=" px-5 py-2 w-100 about_btn border-0 text-white fs-5">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===================== Solutions Section end ========================-->


    <!--===================== Case Studies Section start ========================-->
    <div class="case_studies_section section common-section" id="case_studies">


        <div class="section-title text-center p-5">
            <h1 class="mt-5 text-uppercase" style="font-family: 'Inter', sans-serif; font-weight: 900;">Case Studies</h1>
            <img src="images/kweesha_home_logo.svg" alt="" class=" mx-auto d-block">
            <p class="fs-5">Transforming lenders' operations and enhancing lead generation</p>
        </div>

        <div class="container-fluid m-0 p-0">
            <div class="bg-gradient-div-2  d-flex justify-content-center align-items-center">
                <div class="row d-flex justify-content-center  container">
                    <div class="col-md-7 text-white  d-flex flex-column justify-content-start align-items-center ">
                        <h2 class="text-white py-4">
                            Discover how we've helped lenders transform their operations and enhance
                            growth
                        </h2>
                        <p class="text-white">
                            Our commitment to transforming the lending
                            landscape is evident in the success stories we have helped write. Our case
                            studies demonstrate the power of innovative approaches, meticulous analysis,
                            and a relentless drive for improvement.
                        </p>
                        <p class="text-white">
                            of innovative
                            approaches, meticulous analysis, and a relentless drive for improvement.
                            Explore how we have empowered lenders to streamline their operations, create
                            robust financial models, and enhance their lead generation strategies.
                        </p>
                        <p class="text-white">
                            Each case is a journey of transformation, demonstrating how businesses can
                            move from survival to success with Kweesha Capital as their trusted partner.
                        </p>
                        <div class="mt-5 button_about ">
                            <button class=" px-5 py-2 w-100 about_btn border-0 text-white fs-5">Read More</button>
                        </div>
                    </div>
                    <div class="col-md-5  d-flex align-items-start align-items-center">
                        <div class="image-section py-4">
                            <img src="./images/about8.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===================== Case Studies Section end ========================-->


    <!--===================== About Us Section start ========================-->
    <div class="About_Section section common-section" id="about">
        <div class="container-fluid m-0 p-0">

            <div class="section-title text-center p-5">
                <h1 class="mt-5 text-uppercase" style="font-family: 'Inter', sans-serif; font-weight: 900;">About Us</h1>
                <img src="images/kweesha_home_logo.svg" alt="" class=" mx-auto d-block">
                <p class="fs-5">A force for change in the lending industry</p>
            </div>

            <div class="container-fluid m-0 p-0">
                <div class="bg-gradient-div  d-flex justify-content-center align-items-center">
                    <div class="row d-flex justify-content-center  container">
                        <div class="col-md-5  d-flex align-items-start align-items-center">
                            <div class="image-section py-4">
                                <img src="./images/about9.jpg" alt="" />
                            </div>
                        </div>

                        <div class="col-md-7 text-white  d-flex flex-column justify-content-start align-items-center">
                            <h2 class="text-white py-4">
                                Meet Kweesha Capital - a force for change in the lending industry
                            </h2>
                            <p class="text-white">
                                Kweesha Capital is more than just a financial
                                consulting firm - we are a force for change in the lending industry. Our
                                team, composed of financial strategists, analysts, and operations experts,
                                is dedicated to tailoring solutions that propel growth and success.
                            </p>
                            <p class="text-white">
                                We employ an analytical approach that sets us apart, enabling us to
                                uncover hidden opportunities and devise strategies that are as unique as
                                your business.
                            </p>
                            <p class="text-white">
                                With a steadfast commitment to fairness and transparency, we strive to
                                create a robust financial environment that benefits not only lenders but
                                also the small businesses and individuals they serve.
                            </p>
                            <div class="mt-5 button_about ">
                                <button class=" px-5 py-2 w-100 about_btn border-0 text-white fs-5">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===================== About Us Section end ========================-->

    <!-- =============== Contact Section Start ========== -->

    <section class="common-section contact-section">
        <div class='contact_title'>
            <h2 class="text-center contact_title fs-1 text-uppercase mt-5" style="font-family: 'Inter', sans-serif; font-weight: 900;">Contact</h2>
        </div>
        <img src="images/kweesha_home_logo.svg" alt="" class=" mx-auto d-block">
        <div class="mx-auto text-center">
            <p class="mx-auto fs-5 contact_subtitle mt-3">Unlock new avenues for growth with us
            </p>
        </div>

        <div class="container-fluid p-0 my-5">
            <div class="bg-gradient-div d-flex justify-content-center align-items-center">
                <div class="row d-flex align-items-center justify-content-around p-3 ">
                    <div class="col-md-4">
                        <div class="image-section" style="background-color: #fff">
                            <div class="row container py-5">
                                <div class="col-md-2 text-center icon px-0 py-3">
                                    <i class="bi bi-geo-alt px-3 py-2"></i>
                                </div>
                                <div class="col-md-10">
                                    <div class="loction ">
                                        <h5 class="m-0">Location:</h5>
                                        <p>
                                            16 Navneet Vihar, Sector 9, Indira Nagar, Lucknow, Uttar
                                            Pradesh 226016
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center icon px-0 py-1">
                                    <i class="bi bi-envelope  px-3 py-2"></i>
                                </div>
                                <div class="col-md-10">
                                    <div class="email-address">
                                        <h5 class="m-0">Email:</h5>
                                        <p>info@kweeshacapital.com</p>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center icon px-0 py-1">
                                    <i class="bi bi-phone  px-3 py-2"></i>
                                </div>
                                <div class="col-md-10">
                                    <div class="mobile-phone">
                                        <h5 class="m-0">Call:</h5>
                                        <p>+1 9177459305</p>
                                    </div>
                                </div>
                            </div>
                            <div class="map-section p-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.6696269658123!2d81.0018623!3d26.882235599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2a6bfffffff%3A0x884f6c4fa7ac8905!2sKweesha%20Solutions%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1696330399118!5m2!1sen!2sin%22" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 my-3">
                        <div class="p-4" style="background-color: #fff;">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" class="php-email-form form_data p-1">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name" class="mb-1">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name" class="mb-1">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="my-1">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="my-1">Message</label>
                                    <textarea class="form-control" name="message" rows="10" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!
                                    </div>
                                </div>

                                <div type="submit" name="esubmit" class="button_about text-center">
                                    <button class=" px-5 py-3 w-48 about_btn border-0 text-white fs-6">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--============ End Contact Section end ======================-->

    <!--============  Footer section end ===================-->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="images/kweesha_capital_footer_logo.svg" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text w-75">
                                <p class="text-white">Elevating businesses to new heights through
                                    innovative financial solutions and a relentless drive for
                                    improvement and success.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="bi bi-instagram icon"></i></a>
                                <a href="#"><i class="bi bi-facebook icon"></i></a>
                                <a href="https://www.linkedin.com/company/kweesha-capital/"><i class="bi bi-linkedin icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2  col-6 col-md-5 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>QUICK LINK</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Solutions</a></li>
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">Contact</a></li>

                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-6 col-md-7 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Upcoming</h3>
                            </div>
                            <ul>
                                <li><a href="">Employee</a></li>
                                <li><a href="">Agreement</a></li>
                                <li><a href="">E-sign</a></li>
                                <li><a href="">Omfg</a></li>

                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p class="text-white">Don’t miss to subscribe to our new feeds, kindly
                                    fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" class="php-email-form form_data">
                                    <input type="email" class="text-white" name="emails" placeholder="Email Address">
                                    <button type="submit" name="msubmit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="footer-cta">
        <div class="text-center p-4">
            <p class="fs-6 text-white">Copyright ©2023-2024 | <a href="/" class='text-decoration-none' style="color:var(--fourth-primary)"> Kweesha Pvt. Ltd. </a></p>
        </div>
    </footer>
    <!--============  Footer section end ===================-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>

<?php


if (isset($_POST['esubmit'])) {

    // Set the recipient email address
    $to = "info@kweeshacapital.com";
    $name = $_POST['name'];
    $Subjects = $_POST['subject'];
    $subject = "New message from contact form - Kweesha Capital";
    $message = $_POST['message'];
    $form = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // sanitizing user input

    // Create the email content
    $body = "Dear Admin,\n\n You have received a new message from the contact form on Kweesha Capital. Here are the details: \n\nName: $name\nEmail: $form\nSubject: $Subjects\nMessage: $message\n\nPlease respond to the sender as soon as possible.\n\nBest regards,\nKweesha Capital";



    // Set additional headers
    $headers = "From: $form";

    $success = mail($to, $subject, $body, $headers);


    if ($success) {
        echo '<script>alert("Message sent successfully.")</script>';
    } else {
        echo '<script>alert("An error occurred while sending the message.")</script>';
    }
}

?>


<?php


if (isset($_POST['msubmit'])) {

    // Set the recipient email address
    $to = filter_var($_POST['emails'], FILTER_SANITIZE_EMAIL); // sanitizing user input;
    $subject = "New Subscriber - Kweesha Capital";
    $message = "Thank you for subscribing!";
    $from = "info@kweeshacapital.com"; // sanitizing user input

    // Create the email content
    $body = "Dear User,\n\nYou have received a new message from the subscribe form on Kweesha Capital. Here are the details: \n\nName: $message\n\nPlease respond to the sender as soon as possible.\n\nBest regards,\nKweesha Capital";



    // Set additional headers
    $headers = "From: $to";

    $success = mail($from, $subject, $body, $headers);


    if ($success) {
        echo '<script>alert("Message sent successfully.")</script>';
    } else {
        echo '<script>alert("An error occurred while sending the message.")</script>';
    }
}

?>