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
    <nav class="bg-light p-2 sticky-top ">
        <ul class="nav container">
            <li class="nav-item active">
                <a href="#" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Admission
                </a>
                <ul class="dropdown-menu">
                    <li><a href="admissionApplication.html" class="dropdown-item">Post UTME</a></li>
                    <li><a href="#" class="dropdown-item">Direct Entry (DE)</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="#" class="dropdown-item">Sandwich</a></li>
                    <li><a href="#" class="dropdown-item">E-Learning</a></li>
                    <li><a href="#" class="dropdown-item">Check Admission Status</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="login.html" class="nav-link">Portal</a>
            </li>


        </ul>

    </nav>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-12  m-5">
                <form class="form p-3" autocomplete="off">
                    <h4 class="primary-color text-center">Admission Application</h4>
                    <hr class="primary-color">

                    <section class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Lastname</label>
                                <input type="text" name="lname" placeholder="Enter Lastname" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Firstname</label>
                                <input type="text" name="fname" placeholder="Enter Firstname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Middle Name</label>
                                <input type="text" name="mname" placeholder="Enter Middle Name" class="form-control">
                            </div>
                        </div>
                    </section>
                    <section class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Enter Email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Gender</label>
                                <select class="form-select" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="tel" name="phone" placeholder="Enter Phone Number" class="form-control">
                            </div>

                        </div>
                    </section>

                    <section class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Contact Address</label>
                                <textarea class="form-control" name="contactAddress" rows="5">
                               </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Permanent Address</label>
                                <textarea class="form-control" name="permanentAddress" rows="5">
                               </textarea>
                            </div>
                        </div>

                    </section>

                    <div class="mb-3">
                        <button name="submit" class="btn  btn-main">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>

    </main>



    <section class="footer-banner row bg-dark p-5 container-fluid">

        <div class="col-md-3">
            <p class="h5 text-white">
                <span class="footer-title">About</span> us
            </p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <img src="images/bsulogo.png" height="50px" width="50px">
                    </a>
                </li>

                <li class="nav-item">
                    <p class="nav-link text-white h6">Comfort University of Technology, Abuja</p>
                </li>

            </ul>
        </div>
        <div class="col-md-3">
            <p class="h5 text-white">
                <span class="footer-title">Social</span> Links
            </p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="https://web.facebook.com/ACU.Oyo" target="_blank" class="nav-link text-white">
                        <i class="fab fa-facebook" style="font-size: 20px;"></i> Facebook
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fab fa-instagram" style="font-size: 20px;"></i> Instagram
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fab fa-twitter" style="font-size: 20px;"></i> Twitter
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fab fa-linkedin-in" style="font-size: 20px;"></i> Linkedin
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-6">
            <p class="h5 text-white">
                <span class="footer-title">Contact</span> Us
            </p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="https://web.facebook.com/ACU.Oyo" target="_blank" class="nav-link text-white">
                        <i class="fas fa-envelope"></i> support@cuta.edu.ng
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fas fa-phone-square-alt"></i> +2348140615512 | +2349032925257
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fas fa-map-marker-alt"></i>
                        Opp Standard Plaza, Wuse zone 6, Abuja
                    </a>
                </li>

            </ul>
        </div>

    </section>
    <section class="row bg-main container-fluid">
        <div class="col-md-12 p-2">
            <p class="text-white text-center">Copyright &copy Comfort University of Technology, Abuja | All right
                Reserved
                <script>document.write(new Date().getFullYear())</script>
            </p>
        </div>
    </section>


    <script type="text/javascript" src="js/bootstrap.bundle.min.js">
    </script>
       <script src="js/script.js"></script>
</body>

</html>