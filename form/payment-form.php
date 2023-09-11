<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KDM</title>
    <!-- Google fonts and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/9b8d013cc3.js" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- Style -->
    <link rel="stylesheet" href="../css/cart.css">

    <!-- js -->
    <script src="../js/cart.js"></script>

</head>

<body>
    <main>
        <div class="container mt-4 pt-4 ">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="message"></div>
                    </div>
                </div>
            </div>
            <!-- Form payment -->
            <div class="d-flex justify-content-center">
                <div class="row  mb-3">
                    <div class="col-sm-12">
                        <h3>KDM</h3>
                        <div class="payment-form">
                            <form id="target">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Full name :</label>
                                    <input type="text" class="form-control" id="customer-name" autocomplete="false" />
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-email" class="col-form-label">Your email:</label>
                                    <input type="email" class="form-control" id="customer-email">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-date" class="col-form-label">Select appoitment date:</label>
                                    <input type="date" class="form-control" id="customer-date">
                                </div>
                                <div class="mb-3">
                                    <label for="custoner-gender" class="col-form-label">Gender:</label>
                                    <select class="form-select" aria-label="select gender" id="customer-gender" onchange="disableButton(this)">
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <a href="http://localhost/KDM/" type="button" class="customer-btn" id="goBack" title="Close"><i class="fa-sharp fa-solid fa-arrow-left"></i> Cancel</a>
                                    <button type="submit" class="customer-btn" id="pay" title="Process the payement">Confirm</button>
                                    
                                    <button class="customer-btn" type="button" disabled id="spinner">
                                        <span class="spinner-border spinner-border-sm" role="status" id="loading"></span>
                                        Loading...
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- END  -->

            <div class="row text-center">
                <div class="col-sm-12 col-xs-12">
                    <div class="footer_copyright">
                        <p class="text-dark">© 2023 KDM. All Rights Reserved.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->

        </div>
    </main>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>