<?php
require 'includes/init.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Mechanized Industrial Category Bootstrap Responsive Web Template | Single :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Mechanized Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800" rel="stylesheet">

    <!-- //Fonts -->
</head>

<body>
    <!-- mian-content -->
    <div class="main-content page-inner" id="home">
        <!-- header -->
        <?php require 'includes/header.php'  ?>
        <!-- //header -->

        <!-- //banner -->
    </div>
    <!--// mian-content -->
    <!-- banner-bottom-wthree -->
    <section class="blog_w3ls py-5" id="blog">
        <div class="container py-xl-5 py-lg-3">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-4">Portfolio </h3>
            </div>
            <?php
                require 'includes\functions.php';
                $events = getPastEvent();
            ?>

            <div class="row">

                <?php
                $i = 0;
                foreach ($events as $event):
            // echo print_r($event);
                $i++;
                             ?>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card border-0 med-blog">
                        <div class="card-body border border-bottom-0 pb-5">
                            <div class="mb-3">
                                <h5 class="blog-title card-title font-weight-bold m-0">
                                    <a href="single.html"><?php  echo $event['past_event_title']; ?></a>
                                </h5>
                                <div class="blog_w3icon">
                                    <span>
                                        Feb 14, 2019 - loremipsum</span>
                                </div>
                            </div>
                            <p class="mb-4"><?php  echo $event['past_event_desc']; ?>
                            </p>
                            <div class="price-button mt-md-3 mt-2">
                                <a class="btn text-uppercase" href="">
                                    Read More</a>
                            </div>
                        </div>
                        <div class="card-header p-0" style="overflow:hidden">
                            <a href="single.html">
                                <img class="card-img-bottom"
                                    src="images\pasteventimages\<?php echo $event['img_name']; ?> ">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <?php endforeach; ?>

            </div>

        </div>
    </section>
    <!-- //banner-bottom-wthree -->
    <!-- footer -->
    <footer class="footer-content">
        <div class="layer footer">
            <div class="container-fluid">
                <div class="row footer-top-inner-w3ls">
                    <div class="col-lg-4 col-md-6 footer-top mt-md-0 mt-sm-5">
                        <h2>
                            <a class="navbar-brand" href="index.html">
                                Mechanized
                            </a>
                        </h2>
                        <p class="my-3">Donec consequat sam libero tempore, cum soluta nobis est eligendi optio cumque
                            nihil impedit quo minus</p>
                        <p>
                            Id quod possimusapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper
                            varius orci.
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-md-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Navigation</h3>
                            <hr>
                            <ul class="list-info-w3pvt">
                                <li>
                                    <a href="index.html" class="scroll">
                                        Home
                                    </a>
                                </li>
                                <li class="my-2">
                                    <a href="index.html" class="scroll">
                                        About Us
                                    </a>
                                </li>
                                <li class="my-2">
                                    <a href="index.html" class="scroll">
                                        Gallery
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="index.html" class="scroll">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html" class="scroll">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Links</h3>
                            <hr>
                            <ul class="list-info-w3pvt">
                                <li>
                                    <a href="#about" class="scroll">
                                        Our Mission
                                    </a>
                                </li>
                                <li class="my-2">
                                    <a href="#blog" class="scroll">
                                        Latest Posts
                                    </a>
                                </li>
                                <li class="my-2">
                                    <a href="#">
                                        Explore
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#contact" class="scroll">
                                        Find us
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Contact Us</h3>
                            <hr>
                            <div class="last-w3ls-contact">
                                <p>
                                    <a href="mailto:example@email.com">info@example.com</a>
                                </p>
                            </div>
                            <div class="last-w3ls-contact my-2">
                                <p>+ 456 123 7890</p>
                            </div>
                            <div class="last-w3ls-contact">
                                <p>+ 52 Donec consequat,
                                    <br>523 Loem Ipsum 049436.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <p class="copy-right-grids text-li text-center my-sm-4 my-4">© 2019 Mechanized. All Rights Reserved |
                    Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
                <div class="w3ls-footer text-center mt-4">
                    <ul class="list-unstyled w3ls-icons">
                        <li>
                            <a href="#">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="move-top text-right"><a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3"
                            aria-hidden="true"></span></a></div>
            </div>
            <!-- //footer bottom -->
        </div>
    </footer>
    <!-- //footer -->


</body>

</html>