<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Triangle Solution</title>
    <meta title="Services | Care Hospitality Management Services in Nepal">
    <meta name="Description" content="Care Hospitality Management is providing services related to Hotel Operations, Technical Solution and Hospitality management in Nepal.">
    <meta name="Keywords" content="care hospitality services,hospitality services in nepal,hotel management service">
    <link href="../assest/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assest/css/flickity.min.css">
    <link rel="stylesheet" href="../assest/css/style.css">
</head>

<body>
    <?php 
    $page = "services";
    include "../header.php";
    ?>

    <div class="cont-services">
        <div class="img"></div>
        <div class="content">
            <div>
                <h3 class="hero-title ll ll1">Our Services</h3>
                <p class="ll2 ll hero-subtitle">
                    <b>Triangle Solution</b> –  A healthy, livable, and inclusive Environment for all.
                </p>
            </div>
        </div>
    </div>

    <div class="pt-5"></div>
    <section id="details" class="details pt-5">
      <div class="container px-4 py-5 p-sm-5">
      <div class="row row-cols-1 pb-5 mb-0 mb-md-5">
                <h2 class="hero-title text-center">
                     <span class="text-success fwsm">Building brands with purpose</span>
                </h2>
            </div>

        <div class="row content--services align-items-center justify-content-between">
          <div class="col-md-6 p-md-5" data-aos="fade-right">
            <img src="../assest/images/consultancy.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-6 px-2 px-sm-3 py-3 mt-0 pt-3 pt-sm-0 px-3 mt-lg-0" data-aos="fade-up">
          <h2 class="text-success fw-bold"><span class="text-dark">01. </span> <span
                                class="gradient-text">Consultancy Support</span>
                        </h2>
                        <br>
            
              <ul class="inside_title2 justifyy text-mine ">
                  <li>	Engineering Design of Drinking Water Supply, Wastewater, Faecal Sludge, Solid & Medical Waste Treatment Systems </li>
                  <li>	Technical Consultation on design optimization, upgrading, and retrofitting of water, wastewater, faecal sludge  and solid waste treatment systems </li>
                  <li>	Engineering design of building and other infrastructures</li>
                  <li>	Research and Development including technical study, technology selection and viablity assessment, detailed feasibility study and survey on Water, Sanitation, Environment and other development sectors</li>
                  <li>  Development of investment plan including business models and financial planning</li>
                  <li>  Support in formulation of  policy, by-laws and guidelines</li>
                  <li>	Citywide Inclusive Sanitation (CWIS) planning and implementation</li>
              </ul>
            </p>
          </div>
        </div>

        <div class="row content--services align-items-center justify-content-between">
          <div class="col-md-6 order-1 order-md-2 p-md-5" data-aos="fade-left">
            <img src="../assest/images/business.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-6 pt-5 order-2 order-md-1 px-3 px-sm-3 py-3 mt-0 pt-3 pt-sm-0 px-2 mt-lg-0" data-aos="fade-up">
          <h2 class="text-success fw-bold"><span class="text-dark ">02. </span> <span
                                class="gradient-text">Business Support</span>
                        </h2>
                        <br>
            
              <ul class="inside_title2 justifyy text-mine">
                  <li>	Market innovative water and sanitation solutions, transformative wastewater, faecal sludge and solid waste treatment technologies</li>
                  <li>	Design and deliver trainings on water, sanitation and environment</li>
                  <li>	Promote water, sanitation and environment related innovative tools and IT products</li>
                  <li>	Development of knowledge products and advocacy materials</li>
                  <li>	Market green products and technologies</li>
              </ul>
            
          </div>
        </div>

        <div class="row content--services align-items-center justify-content-between">
          <div class="col-md-6 p-md-5" data-aos="fade-right">
            <img src="../assest/images/management.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-6 pt-5 px-2 px-sm-3 py-3 mt-0 pt-3 pt-sm-0 px-3 mt-lg-0" data-aos="fade-up">
          <h2 class="text-success fw-bold"><span class="text-dark">03. </span> <span
                                class="gradient-text">Management Support</span>
                        </h2>
                        <br>
          
                <ul class="inside_title2 justifyy text-mine">
                    <li>Construction and supervision of water, wastewater, solid waste and faecal sludge treatment facilities</li>
                    <li>Turn-key services on O&M, management, and monitoring of water and sanitation systems</li>
                    <li>Preparation of Terms of References including bidding documents for water and sanitation projects</li>
                    <li>Project development and management</li>
                </ul>
            
          </div>
        </div>

      </div>
    </section>

    <!--Contact section start-->
    <div class="container py-5">
        <div class="myback2">
            <div class="row">
                <div class="col text-center px-5"><img src="../assest/images/contactt.png" alt="Contact image vector"
                        class="img-fluid">
                </div>
                <h6 class="text-center mytitle">Let's get in touch !</h6>
                <h6 class="text-center">Triangle Solution - </span><span><a
                            href="mailto:info@carehospitality.com.np"> info@trianglesolution20@gmail.com</a></h6>
            </div>
            <div class="row row-cols-1 row-cols-md-3 mt-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="contactForm.php" method="POST">
                        <input type="hidden" name="form_no" value="form_home">
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
                <h3 class="hero-title ll ll1">Triangle Solution has expertise and experience.</h3>
                <a href="/about" class="btn btn-lg mybtn5 mt-3">Know more About Us</a>
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