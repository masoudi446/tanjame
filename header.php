<div class="container d-flex align-items-center justify-content-lg-between">

    <!--<h1 class="logo me-auto me-lg-0"><a href="index.php">Gp<span>.</span></a></h1>-->
    <h1 class="logo me-auto me-lg-0"><a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo/logo0.png"
                                                                                            alt=""
                                                                                            class="img-fluid"></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a class="nav-link scrollto <?php
                $url = $_SERVER['REQUEST_URI'];
                if ((strpos($url, 'index.php') !== false) or (strpos($url, '.php') == false)) {
                    echo " active ";
                }
                ?> "href="index.php#hero">Home</a></li>
            <li><a class="nav-link scrollto <?php
                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url, 'who_we_are.php') !== false) {
                    echo " active ";
                }
                ?>"href="who_we_are.php">Who we are?</a></li>
            <li class="dropdown"><a href="#" class="<?php
                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url, 'yazdbaf_') !== false or strpos($url, 'yazd_city') !== false) {
                    echo " active ";
                }
                ?>"><span>Yazdbaf Co.</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="yazdbaf_co.php">Yazdbaf Co.</a></li>
                    <li><a href="yazd_city.php">Yazd City</a></li>
                    <!--<li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="yazdbaf_spinning.php">Spinning</a></li>
                            <li><a href="yazdbaf_weaving.php">Weaving</a></li>
                            <li><a href="yazdbaf_dyeing.php">Dyeing, Printing & finishing</a></li>
                            <!-<li class="dropdown"><a href="#"><span>Fashion</span> <i
                                            class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Yazdbaf Store</a></li>
                                </ul>
                            </li>->
                        </ul>
                    </li>-->
                    <li><a href="yazdbaf_gallery.php">Gallery</a></li>
                </ul>
            </li>
            <li><a href="what_we_do.php" class="<?php
                               $url = $_SERVER['REQUEST_URI'];
                                if (strpos($url, 'what_we_do.php') !== false or strpos($url, 'b2b.php') !== false or strpos($url, 'b2c.php') !== false) {
                                    echo " active ";
                                }
                                ?>">what we do?</a></li>
            <!--<li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>-->
            <!--<li class="dropdown"><a href="what_we_do.php" class="<?php
/*                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url, 'what_we_do.php') !== false or strpos($url, 'b2b.php') !== false or strpos($url, 'tanjameh_com.php')  !== false or strpos($url, 'tanjameh_look.php') !== false or strpos($url, 'tanjameh_lounge.php') !== false) {
                    echo " active ";
                }
                */?>"><span>what we do</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="b2b.php">B2B</a></li>
                    <li class="dropdown"><a href="#"><span>B2C</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="tanjameh_com.php">Tanjameh.com</a></li>
                            <li><a href="tanjameh_look.php">Tanjameh Look</a></li>
                            <li><a href="tanjameh_lounge.php">Tanjameh Lounge</a></li>
                        </ul>
                    </li>
                </ul>
            </li>-->
            <li><a class="nav-link scrollto" href="index.php#contact">Where we are?</a></li>
            <li><a class="nav-link scrollto" href="https://tanjameh.com" target="_blank">Online Store</a></li>
            <!--<li><a class="nav-link scrollto" href="index.php#about">About Us</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <!--<a href="#about" class="get-started-btn scrollto">Get Started</a>-->

</div>
