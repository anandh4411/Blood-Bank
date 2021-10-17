<?php $search = $_POST["search"]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Results of "; echo $search; ?></title>

    <link rel="shortcut icon" href="../images/favicon.png" />

    <!-- The styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/animate.css" rel="stylesheet" type="text/css">
    <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="../css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <section class="header-wrapper navgiation-wrapper">

        <div class="navbar navbar-default">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="../index.html"><img alt="" src="../images/logo.png"></a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li style="margin-top: 1%;">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search Blood Group"
                                    aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                        <li class="drop">
                            <a href="../index.html" title="Home">Home</a>
                        </li>
                        <li><a href="pages/about.html" title="About Us">About Us</a></li>
                        <li>
                            <a href="pages/gallery.html">Gallery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <!-- Result Section -->
    <div class="container">
        <div class="col">

        <?php

            require_once 'db.php';

            $query = "SELECT * FROM donor WHERE blood_group = '$search'";

            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result)){
                echo '<div class="card">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <small>name:</small>
                                    <h2>'.$row["name"].'</h2>
                                </div>
                                <div class="col-md-1">
                                    <small>age:</small>
                                    <h3>'.$row["age"].'</h3>
                                </div>
                                <div class="col-md-2">
                                    <small>blood group:</small>
                                    <h3>'.$row["blood_group"].'</h3>
                                </div>
                                <div class="col-md-2">
                                    <small>location:</small>
                                    <h4>'.$row["location"].'</h4>
                                </div>
                                <div class="col-md-2">
                                    <small>location:</small>
                                    <h4>'.$row["phone"].'</h4>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary">Connect</button>
                                </div>
                            </div>
                        </div>
                    </div>';
            }

        ?>

        </div>
    </div>
    <!-- Result Section End -->

    <footer>
        <section class="footer-contents">

            <div class="container">

                <div class="row clearfix">

                    <div class="col-md-6 col-sm-12">
                        <p class="copyright-text"> Copyright © 2021, All Right Reserved - Made with love by <a
                                style="color:#FE3C47;" target="_blank" href="https://anandh.xyz">Anandh</a> </p>

                    </div> <!-- end .col-sm-6  -->

                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="../index.html">Home</a>
                                    </li>
                                    <li><a href="about.html" title="About Us">About Us</a></li>
                                    <li>
                                        <a href="gallery.html">Gallery</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> <!--  end .footer-nav  -->
                    </div> <!--  end .col-lg-6  -->

                </div> <!-- end .row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .footer-content  -->
    </footer>

    <a id="backTop">Back To Top</a>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.backTop.min.js "></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/waypoints-sticky.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/venobox.min.js"></script>
    <script src="../js/custom-scripts.js"></script>
</body>

</html>