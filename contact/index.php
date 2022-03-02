<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Triangle Solution</title>
    <meta title="Contact | Care Hospitality Nepal">
    <meta name="Description" content="Care Hospitality is always open to hear from you.">
    <meta name="Keywords" content="care hospitality contact,hospitality in nepal,hospitality company nepal">
    <link href="../assest/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assest/css/flickity.min.css">
    <link rel="stylesheet" href="../assest/css/style.css">
</head>

<body>
    <?php 
    $page = "contact";
    include "../header.php";
    ?>
    <!-- <div class="cont-services">
        <div class="img"></div>
        <div class="content">
            <div>
                <h3 class="hero-title ll ll1">Contact Us</h3>
                <p class="ll2 ll hero-subtitle px-2">
                    <b>Triangle Solution</b> – We Belive in Quality and Trust
                </p>
            </div>
        </div>
    </div> -->

    <!--Contact section start-->
    <div class="container pb-5">
        <div class="myback2">
            <div class="row">
                <div class="col text-center px-5"><img src="../assest/images/contactt.png" alt="Contact image vector"
                        class="img-fluid">
                </div>
                <h6 class="text-center mytitle">Let's get in touch !</h6>
                <h6 class="text-center">Triangle Solution - </span><span><a
                            href="mailto:trianglesolution20@gmail.com">trianglesolution20@gmail.com</a></h6>
            </div>
            <div class="row row-cols-1 row-cols-md-3 mt-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="../contactForm.php" method="POST">
                        <input type="hidden" name="form_no" value="form_contact">
                        <div class="row">
                            <div class="mb-3">
                                <input type="text" placeholder="Full Name" name="name" class="fields" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <select name="service_type" id="service" class="fields">
                                    <option value="" disabled selected>Select Service You want
                                    </option>
                                    <option value="Hospitality Management">Consultancy Support</option>
                                    <option value="Hotel Operations">Business Support</option>
                                    <option value="Technical Services">Management Support</option>
                                </select>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col">
                                <div class="mb-3">
                                    <input type="email" aria-describedby="emailHelp" placeholder="Your email"
                                        name="email" class="fields">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <input type="text" name="phone" placeholder="Phone" name="phone" class="fields">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <input type="text" name="message" id="message" placeholder="Enter your message/query"
                                    class="fields mess">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center"><button type="submit" class="btn mybtn btn-lg">Send
                                    Now</button></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <!--Contact section End-->
    <div class="py-5"></div>
    <div class="cont">
        <div class="img"></div>
        <div class="content">
            <div>
                <h3 class="hero-title llc ll1">Triangle Solution - Expertise and Experienced</h3>
                <a href="/about" class="btn btn-lg mybtn mt-3">Know more About Us</a>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
    <?php 
    include "../footer.php";
    ?>

    <script src="../assest/js/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
    <script src="../assest/js/bootstrap.min.js"></script>
    <script src="../assest/js/sweetalert.min.js"></script>
    <script src="../assest/js/app.js"></script>
    <?php
        if(
        isset($_SESSION['success'])
        ){
            ?>
    <script type="text/javascript" async>
        swal({
            title: "Message received!",
            text: 'Thank you for your Message.\r\nWe will reach out to you shortly!',
            button: false,
            timer: 2000
        });
    </script>
    <?php
            unset($_SESSION['success']);
        }

        if(
            isset($_SESSION['error'])
            ){
                ?>
    <script type="text/javascript" async>
        swal({
            title: "Message not received!",
            text: "<?php echo $_SESSION['error']; ?>",
            button: false,
            timer: 2000
        });
    </script>
    <?php
                unset($_SESSION['error']);
            }
    ?>
</body>

</html>