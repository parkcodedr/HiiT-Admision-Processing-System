<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="images/bsulogo.png" rel="icon">

    <link href="css/all.css" rel="stylesheet">
    <title>Portal|CUTA| Login</title>
</head>

<body>

    <div class="container-fluid image-header">
        <a href="#" class="navbar-brand ">
            <img src="images/bsulogo.png" class="img-fluid">
        </a>
        <h2 class=" text-white text-center">COMFORT UNIVERSITY OF TECHNOLOGY</h2>
        <h6 class="text-center h4">P.M.B 2002, ABUJA FCT</h6>
    </div>
    <?php
    include_once('layout/nav.php');
    ?>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 shadow m-5">
                <form class="form p-3" name="loginForm">
                    <h4 class="primary-color text-center">Portal Login</h4>
                    <hr class="primary-color">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control" id="email">
                        <div id="emailError" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>

                        <div class="input-group">
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" id="password">
                            <span class="far fa-eye-slash fa-1x" id="togglePassword"></span>
                        </div>
                        <div id="passwordError" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <button name="submit" class="btn btn-main login" id="login" onclick="" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </main>



    <?php include_once('layout/footer.php'); ?>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js">
    </script>
    <script src="js/script.js"></script>
</body>

</html>