<?php
include_once('connection.php');
$error = "";
$message = "";

if (isset($_POST["submit"])) {
    $first_name = clean_input($_POST["fname"]);
    $last_name = clean_input($_POST["lname"]);
    $middle_name = clean_input($_POST["mname"]);
    $email = clean_input($_POST["email"]);
    $gender = clean_input($_POST["gender"]);
    $phone = clean_input($_POST["phone"]);
    $contact_address = clean_input($_POST["contactAddress"]);
    $permanent_address = clean_input($_POST["permanentAddress"]);
    $faculty = clean_input($_POST["faculty"]);
    $department = clean_input($_POST["department"]);
    $course = clean_input($_POST["course"]);

    if (
        empty($first_name) || empty($last_name) || empty($middle_name)
        || empty($phone) || empty($gender) || empty($email)
        || empty($contact_address) || empty($permanent_address)
        || empty($faculty) || empty($department) || empty($course)
    ) {
        $error .= "All fields are required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= "Invalid Email Address";
        } else {
            echo $message .= "Ok";
        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="images/bsulogo.png" rel="icon">

    <link href="css/all.css" rel="stylesheet">
    <title>Portal|CUTA| Admission Application</title>
</head>

<body>

    <div class="container-fluid image-header">
        <a href="#" class="navbar-brand ">
            <img src="images/bsulogo.png" class="img-fluid">
        </a>
        <h2 class=" text-white text-center">COMFORT UNIVERSITY OF TECHNOLOGY</h2>
        <h6 class="text-center h4">P.M.B 2002, ABUJA FCT</h6>
    </div>
    <?php include_once('layout/nav.php'); ?>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-12  m-5">
                <form class="form p-3" method="POST">
                    <h4 class="primary-color text-center">Admission Application</h4>
                    <hr class="primary-color">

                    <h5 class="text-center text-danger fw-bold">
                        <?php
                        echo $error;

                        ?>
                    </h5>
                    <h5 class="text-center text-success fw-bold">
                        <?php
                        echo $message;

                        ?>
                    </h5>
                    <section class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Lastname</label>
                                <input type="text" name="lname" placeholder="Enter Lastname" class="form-control" value="<?php echo (isset($last_name)) ? $last_name : ""; ?>">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Firstname</label>
                                <input type="text" name="fname" placeholder="Enter Firstname" class="form-control" value="<?php echo (isset($first_name)) ? $first_name : ""; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Middle Name</label>
                                <input type="text" name="mname" placeholder="Enter Middle Name" class="form-control" value="<?php echo (isset($middle_name)) ? $middle_name : ""; ?>">
                            </div>
                        </div>
                    </section>
                    <section class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Enter Email" class="form-control" value="<?php echo (isset($email)) ? $email : ""; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Gender</label>
                                <select class="form-select" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" <?php echo (isset($gender) && $gender == 'male') ? "selected" : ""; ?>>Male</option>
                                    <option value="female" <?php echo (isset($gender) && $gender == 'female') ? "selected" : ""; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="tel" name="phone" placeholder="Enter Phone Number" class="form-control" value="<?php echo (isset($phone)) ? $phone : ""; ?>">
                            </div>

                        </div>
                    </section>

                    <section class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Contact Address</label>
                                <textarea class="form-control" name="contactAddress" rows="5">
                                <?php echo (isset($contact_address)) ? $contact_address : ""; ?>
                               </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Permanent Address</label>
                                <textarea class="form-control" name="permanentAddress" rows="5">
                                <?php echo (isset($permanent_address)) ? $permanent_address : ""; ?>
                               </textarea>
                            </div>
                        </div>

                    </section>
                    <section class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Faculty</label>
                                <select class="form-select" name="faculty">
                                    <option value="">Select Faculty</option>
                                    <option value="Science" <?php echo (isset($faculty) && $faculty == 'Science') ? "selected" : ""; ?>>Science</option>
                                    <option value="Art" <?php echo (isset($faculty) && $faculty == 'Art') ? "selected" : ""; ?>>Art</option>
                                    <option value="Social Science" <?php echo (isset($faculty) && $faculty == 'Social Science') ? "selected" : ""; ?>>Social Science</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Department</label>
                                <select class="form-select" name="department">
                                    <option value="">Select Department</option>
                                    <option value="Computer Science" <?php echo (isset($department) && $department == 'Computer Science') ? "selected" : ""; ?>>Computer Science</option>
                                    <option value="Chemistry" <?php echo (isset($department) && $department == 'Chemistry') ? "selected" : ""; ?>>Chemistry</option>
                                    <option value="Economics" <?php echo (isset($department) && $department == 'Economics') ? "selected" : ""; ?>>Economics</option>
                                    <option value="English" <?php echo (isset($department) && $department == 'English') ? "selected" : ""; ?>>English</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Course</label>
                                <select class="form-select" name="course">
                                    <option value="">Select Course</option>
                                    <option value="Computer Science" <?php echo (isset($course) && $course == 'Computer Science') ? "selected" : ""; ?>>B.sc Computer Science</option>
                                    <option value="Ecomonics" <?php echo (isset($course) && $course == 'Ecomonics') ? "selected" : ""; ?>>B.sc Ecomonics</option>
                                    <option value="English" <?php echo (isset($course) && $course == 'English') ? "selected" : ""; ?>>B.A English</option>
                                    <option value="Mass Communication" <?php echo (isset($course) && $course == 'English') ? "selected" : ""; ?>>Masss Communication</option>
                                </select>
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



    <?php include_once('layout/footer.php'); ?>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js">
    </script>
    <script src="js/script.js"></script>
</body>

</html>