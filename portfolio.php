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
                        <div class="card-header p-0" style="    max-height: 30vh;overflow-y: hidden; display: flex; justify-content: center;align-items: center;">
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
    <?php  require 'includes\footer.inc.php';   ?>
    <!-- //footer -->


</body>

</html>