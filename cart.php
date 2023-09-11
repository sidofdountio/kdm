<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KDM</title>
    <!-- Google fonts and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/9b8d013cc3.js" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/cart.js"></script>
</head>

<body>
    <main>
        <div class="container mt-4 d-block">

            <!-- Appoitement detail -->
            <div class="row mb-3">
                <div class="col-sm-12">
                    <div class="info">
                        <h1>Finalize the Appointment</h1>
                        <div class="card-body">

                            <p>
                                <i class="fa-solid fa-quote-left"></i>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit veritati
                                <i class="fa-solid fa-quote-right"></i>
                            </p>

                        </div>

                    </div>
                </div>
            </div><!-- end appoitement details -->

            <!-- service details -->
            <div class="row">
                <div class="col-sm-12">
                    <ul class="cart-list">
                        <li class="cart-list-item d-flex justify-content-between">
                            <span class="ms-2 me-auto">Lossing weight <br>
                                <i class="fa-solid fa-arrow-down text-success"></i>
                            </span>
                            <div class="cart-list-item-detail">
                                <img src="assets/lossing-weight1.jpeg" alt="KDM">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Order -->
            <div class="row mb-3">
                <div class="col-sm-12">
                    <ul class="invoice">
                        <h3>Order Summary</h3>
                        <hr>
                        <li class="mt-3 d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                Sub Total :
                            </div>
                            <span class="price">$20.0</span>
                        </li>
                        <li class=" d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                Discount :
                            </div>
                            <span class="price">$20.0</span>
                        </li>

                        <li class=" d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                Total :
                            </div>
                            <span class="price">$20.0</span>
                        </li>
                    </ul>
                </div>
            </div><!-- end order -->

            <!-- Button checkout -->
            <div class="row mb-5">
                <div class="col-sm-12 goBackAndCheckout">
                    <a href="http://localhost/KDM/" type="button" class="customer-btn" id="goBack" title="Continious "><i class="fa-sharp fa-solid fa-arrow-left"></i> Cancel</a>
                    <a href="http://localhost/KDM/form/payment-form.php" type="button" class="customer-btn" id="checkout" title="Checkout"><i class="fa-sharp fa-solid fa-cart-shopping"></i>Checkout</a>
                </div>
            </div> <!-- end button -->
        </div>

    </main>
    <div class="footer">
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
                            <li><a href="#" title="KDM on Facebook"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#" title="KDM on Twitter"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="#" title="KDM on Instagram"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="#" title="KDM on Email"><i class="bi bi-envelope"></i></a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->

        <!-- <ul class="cart-list">
        <li class="cart-list-item">
            <div class="product-cart">
                <img src="assets/lossing-weight1.jpeg" alt="Product 1" class="img-fluid">
                <div class="product-details">
                    <h2>Product 1</h2>
                    <p>Price: $10</p>
                    <p>Quantity: 2</p>
                </div>
            </div>
            <div class="actions">
                <button class="remove">Remove</button>
                <button class="update">Update</button>
            </div>
        </li>
    </ul> -->
        <script src="js/bootstrap.min.js"></script>


</body>

</html>