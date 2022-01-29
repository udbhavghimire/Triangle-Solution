
<?php session_start(); ?>

<div class="list">
    <a href="/" <?php echo ($page=='home' ) ? "class='list-item item11 mnact'" : "class='list-item item11'" ; ?>>
        Home
    </a>
    <a href="/about" <?php echo ($page=='about' ) ? "class='list-item mnact'" : "class='list-item'" ; ?>>
        About
    </a>
    <a href="/services" <?php echo ($page=='services' ) ? "class='list-item mnact'" : "class='list-item'" ; ?>>
        Services
    </a>
    <a href="/works" <?php echo ($page=='works' ) ? "class='list-item mnact'" : "class='list-item'" ; ?>>
        Works
    </a>
    <a href="/team" <?php echo ($page=='team' ) ? "class='list-item mnact'" : "class='list-item'" ; ?>>
        Our Team
    </a>
    <a href="/contact" <?php echo ($page=='contact' ) ? "class='list-item mnact'" : "class='list-item'" ; ?>>
        Contact
    </a>
</div>
<!--Navbar Start-->
<div class="bg-white shadow-sm naa">
    <div class="mynavbar container">
        <div class="row row-cols-2 row-cols-md-6" style="display:flex;align-items:center;">
            <div class="col col-md-4 py-0">
                <a href="/">
                    <img <?php echo ($page=='home' ) ? "src='assest/images/triangle.png'"
                        : "src='../assest/images/triangle.png'"; ?> alt="logo of triangle solution" class="img-fluid"
                    width="150px">
                </a>
                <h6>Triangle Solution</h6>
               
            </div>
            <div class="col col-md-8 text-end haha1">
                <button class="btn no-border toggle">
                    <img <?php echo ($page=='home' ) ? "src='assest/images/menu.svg'"
                        : "src='../assest/images/menu.svg'" ; ?> alt="menu icon" class="img-fluid" id="myhamb">
                </button>
            </div>
            <div class="col col-md-8 text-right py-4 haha">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 juss">
                    <li class="nav-item">
                        <a <?php echo ($page=='home' ) ? "class='nav-link linkactive px-4'"
                            : "class='nav-link px-4' aria-current='page'" ; ?> href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page=='about' ) ? "class='nav-link linkactive px-4'"
                            : "class='nav-link px-4' aria-current='page'" ; ?> href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page=='services' ) ? "class='nav-link linkactive px-4'"
                            : "class='nav-link px-4' aria-current='page'" ; ?> href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page=='works' ) ? "class='nav-link linkactive px-4'"
                            : "class='nav-link px-4' aria-current='page'" ; ?> href="/works">Works</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page=='team' ) ? "class='nav-link linkactive px-4'"
                            : "class='nav-link px-4' aria-current='page'" ; ?> href="/team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo ($page=='contact' ) ? "class='nav-link linkactive px-4'"
                            : "class='nav-link px-4' aria-current='page'" ; ?> href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Navbar End-->