<?php
    /*
    Author : Dountio.
    version : v1.0
    Since : 05 september 2023
    **/
    require "config/util.php";
    // display any error.
    set_error_handler($my_handler_error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KDM</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Google fonts and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Js -->
    <script src="js/main.js"></script>
</head>
<body>
    <!--  Navbar-->
    <nav class="navbar" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                KDM
                <!-- <img src="/assets/brand/kdm-logo.svg" alt="KDM" width="30" height="24" class="d-inline-block align-text-top"> -->
            </a>
            <div class="spacer"></div>

            <a aria-label="kdm on twitter" target="_blank" rel="noopener" href="#" title="Twitter">
                <span id="twitter-logo"><i class="bi bi-twitter"></i></span>
            </a>
            <a href="https://web.facebook.com/profile.php?id=100083576551894" aria-label="Kdm on Facebook" target="_blank" rel="noopener" title="Faceboock">
                <span id="faceboock-logo"><i class="bi bi-facebook"></i></span>
            </a>
        </div>
    </nav>
    <!-- show spinner when page it's load -->
    <div id="spinner">
        <div class="container">
            <div class="row pt-4 mt-5">
                <div class="col-sm-6 mb-4">
                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden" aria-hidden="true" >Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <h1 class="text-uppercase">kdm ...</h1>
                </div>
            </div>
        </div>
    </div><!--  end spinner-->
    <!-- Main -->
    <main>
        <div class="container mt-4 pt-5" id="main">
            <!-- Banner -->
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card" id="banner">
                        <div class="card-body">
                            <h3 class="card-title">- 20%</h3>
                            <p class="card-text">Lossing weight healthing without tea and sport</p>
                            <p class="card-title ">Come and share my experience with me.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end banner-->
            <div class="row mb-2">
                <!-- product -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="product">
                        <img src="assets/lossing-weight1.jpeg" alt="">
                        <div class="like" onclick="toggleFavorite(this,1)">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <div class="details">
                            <h3>Lossing weight</h3>
                            <h3 class="text-muted">$99.0</h3>
                            <a href="http://localhost/KDM/cart.php" class="custom-btn-appoitment">
                                <i class="bi bi-calendar2-check"></i>
                                Make an appointment
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="product">
                        <img src="assets/lossing-weight1.jpeg" alt="">
                        <div class="like" onclick="toggleFavorite(this,<?php echo 2 ?>)">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <div class="details">
                            <h3>Menstrual cycle calculation</h3>
                            <h3 class="text-muted">$100.0</h3>
                            <a href="http://localhost/KDM/cart.php" class="custom-btn-appoitment">
                                <i class="bi bi-calendar2-check"></i>
                                Make an appointment
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="product">
                        <img src="assets/lossing-weight1.jpeg" alt="">
                        <div class="like" onclick="toggleFavorite(this,3)">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <div class="details">
                            <h3>Get our book</h3>
                            <h3 class="text-muted">$100.0</h3>
                            <a href="http://localhost/KDM/cart.php" class="custom-btn-appoitment">
                                <i class="bi bi-calendar2-check"></i>
                                Make an appointment
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end product -->
        </div>
    </main>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="footer_menu">
                        <ul>
                            <li><a href="http://localhost/KDM/" title="Go home page">Home</a></li>
                            <li><a href="#" title="About KDM">About</a></li>
                            <li><a href="#" title="KDM services">Service</a></li>
                        </ul>
                    </div>
                    <div class="footer_copyright">
                        <p>© 2023 KDM. All Rights Reserved.</p>
                    </div>
                    <div class="footer_profile">
                        <ul>
                            <li><a href="https://web.facebook.com/profile.php?id=100083576551894" title="KDM on Facebook"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#" title="KDM on Twitter"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="#" title="KDM on Instagram"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="mailto:femmecyclemenstruel@yahoo.com" title="KDM on Email"><i class="bi bi-envelope"></i></a></li>
                        </ul>

                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

        })

        document.addEventListener("DOMContentLoaded", function() {
            function showSpinner() {
                var spinner = document.getElementById("spinner");
                var main = document.getElementById("main");
                var footer = document.getElementById("footer");
                var navbar = document.getElementById("navbar");
                spinner.style.display = "block";
                main.style.display = "none";
                navbar.style.display = "none";
                footer.style.display = "none";
                console.log("App it's load...")
            }

            showSpinner();
        });

        window.addEventListener("load", function() {
            function hideSpinner() {
                var footer = document.getElementById("footer");
                var spinner = document.getElementById("spinner");
                spinner.style.display = "none";
                var main = document.getElementById("main");
                main.style.display = "block"
                var navbar = document.getElementById("navbar");
                navbar.style.display = "block";
                footer.style.display = "block";
                console.log("App it's down");
            }
            setTimeout(hideSpinner, 1000)
        });
    </script>
</body>

</html>