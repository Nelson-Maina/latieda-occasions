<?php
require 'includes/init.php';

if ($_SESSION['user_type'] !== "admin") {
    redirect("index.html");
}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Latida Admin</title>
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
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" <!--
        Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
        integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
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
        <header>
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4 d-lg-flex">
                    <div id="logo">
                        <h1> <a href="index.html"> Mechanized</a></h1>
                    </div>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2 ml-auto">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="index.html">About</a></li>
                        <li><a href="index.html">Blog</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down"
                                    aria-hidden="true"></span> </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul class="inner-ul">
                                <li><a href="index.html">Gallery</a></li>
                                <li><a href="index.html">Settings</a></li>
                                <li><a href="includes/logout.php">Logout </a></li>
                            </ul>
                        </li>
                        <li><a href="index.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

        <!-- //banner -->
    </div>
    <!--// mian-content -->
    <!-- banner-bottom-wthree -->
    <section class="banner-bottom-wthree py-5" id="about">
        <div class="container py-md-5 px-lg-5">
            <div class="content-left-bottom text-center">
                <h3 class="tittle mb-lg-5 mb-4">Admin Page</h3>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-outline-success" data-toggle="modal" data-target="#RegNewMemberModal">
                        <span><i class="fas fa-plus-circle"></i></span> Add Past Event</button>
                </div>
            </div>



            <div class="row">
                <!-- Event Requests -->
                <div class="col-12">
                    <?php
                    require 'includes\functions.php';

                    $events = getPastEvent();
                 
                ?>

                    <h6 class="text-center ">Resent Requests</h6>
                </div>
                <div class="col-12 " style="overflow: scroll;">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Location</th>
                                <th scope="col">Description</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Requests Date</th>
                                <th scope="col" style="width: 1%;">View</th>
                                <th scope="col" style="width: 1%;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td><button class="btn btn-success btn-sm">View</button></td>
                                <td><button class="btn btn-danger btn-sm">Delete</button></td>


                            </tr>

                    </table>
                </div>

                <!-- Past Event -->

                <div class="col-12 mt-5">
                    <h6 class="text-center ">Past Events</h6>
                </div>
                <div class="col-12 " style="overflow: scroll;">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>

                            <tr>
                                <th scope="col" style="width: 10px;">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>

                                <th scope="col" style="width: 1%;">View</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php  $events = getPastEvent();?>
                            <?php
                            $i = 0;
                            foreach ($events as $event):
                            $i++;
                             ?>

                            <tr>
                                <th scope="row"><?php  echo $i?>
                                </th>
                                <td><?php  echo $event['past_event_title']; ?>
                                </td>
                                <td><?php  echo $event['past_event_desc']; ?>
                                </td>

                                <td> <a
                                        href="admin.php?id=<?php  echo $event['past_event_id']; ?>"><button
                                            class="btn btn-success btn-sm">View</button data-toggle="editpost"
                                            onclick="reply_click(this.id)" data-target=".bd-example-modal-sm"></td>



                            </tr>
                            <?php endforeach;  ?>

                    </table>
                </div>

                <!-- Feedback -->
                <div class="col-12 mt-5">
                    <h6 class="text-center ">Feedback</h6>
                </div>
                <div class="col-12 " style="overflow: scroll;">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Comment</th>
                                <th scope="col" style="width: 1%;">View</th>
                                <th scope="col" style="width: 1%;">Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td><button class="btn btn-success btn-sm">View</button></td>
                                <td><button class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>

                    </table>
                </div>


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

    <!--new past event modal -->
    <div class="modal fade" id="RegNewMemberModal" tabindex="-1" role="dialog" aria-labelledby="RegNewMemberModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:  #f6dffa;">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Enter Past Event Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <script src="ckeditor/ckeditor.js"></script>


                <div class="modal-body py-0 px-1">
                    <!-- //form to create a new post -->
                    <form id="usernewpost" action="includes/event.php" enctype="multipart/form-data" method="post">

                        <div class="form-group ">
                            <input type="text" class="form-control form-control-sm" id="lastName"
                                aria-describedby="emailHelp" placeholder="Enter Event Title" name="post-title" required>

                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Image Here</label>
                            <input type="file" class="form-control-file form-control-sm" name="image"
                                id="exampleFormControlFile1">
                        </div>


                        <textarea name="content" placeholder="Enter Event Description"></textarea>
                        <script>
                            CKEDITOR.replace('content');
                        </script>
                    </form>

                </div>
                <div class="modal-footer" style="background-color:  #f6dffa;">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                    <button type="submit" class="btn btn-success" form="usernewpost" name="post_article">Post</button>
                </div>
            </div>
        </div>
    </div>

    <!--amin verify  post Modal -->

    <div class="modal fade" id="editpost" tabindex="-1" role="dialog" aria-labelledby="RegNewMemberModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header p-1 " style="background-color:  #f6dffa;">
                    <h5 class="modal-title text-center" id="exampleModalScrollableTitle">Edit Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- //require the ck editor -->
                <script src="ckeditor/ckeditor.js"></script>
                <?php  if (isset($_GET['id'])): ?>
                <?php
                    $urlID= $_GET['id'];
                    $eventData = getUpcomingEvents1($urlID);

                   
            ?>

                <div class="modal-body py-0 px-1">
                    <img src="images/pasteventimages/<?php echo $eventData [0]['img_name']; ?>"
                        class="img-fluid img-thumbnail" alt="">
                    <!-- //form to create a new post -->
              

                        <div class="col">
                            <span class="font-weight-bolder d-inline">TITLE: </span><?php echo $eventData[0]['past_event_title']; ?>
                        </div>
                       
                        <!-- //id if the person who posted the article -->

                        <div class="col card mb-2">
                            <?php echo $eventData[0]['past_event_desc']; ?>
                        </div>


                    </form>
                    <?php endif ?>
                </div>
                <div class="modal-footer p-1" style="background-color:  #f6dffa;">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <a href="includes/delete.inc.php?event=<?php echo $eventData[0]['past_event_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
      
                   

                </div>
            </div>
        </div>
    </div>

    <!-- Confirm Deletion Modal -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col p-2">
                            <h6 class="text-white text-center py-2 rounded" style="background: red"><span><i
                                        class="fas fa-exclamation-triangle"></i></span> WARNING</h6>

                            <p>Are you sure you want to permanently delete this Event?</p>

                            <button type="button" data-dismiss="modal" class="btn btn-secondary  btn-sm">NO</button>
                            <a id="demo" class="btn btn-danger btn-sm" href="">YES </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        function reply_click(clicked_id) {
            x = clicked_id;
            document.getElementById("demo").href = "includes/delete.inc.php?event=" + x;

        }
    </script>

    <?php
/*this  code will pop up the modal immediately the page
 loads incase there is a new message in the form*/
if (isset($_GET['id'])) {
    echo '<script>
        $("#editpost").modal();
    
    </script>';
}
?>


</body>

</html>