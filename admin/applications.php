<?php
include_once('../connection.php');
$db = connect();
$sql = "SELECT * FROM admission_application 
ORDER BY created_at DESC";
$result = $db->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <link href="../images/bsulogo.png" rel="icon">

    <link href="../css/all.css" rel="stylesheet">
    <title>Admin | Applications</title>
</head>

<body>
    <?php include_once('nav.php'); ?>
    <div class="container justify-content-center">
        <h3 class="text-center mt-5">Admission Application List</h3>
        <div class="row">
            <table class="table table-bordered table-striped" width="100%">
                <thead class="table-light">
                    <th>S/N</th>
                    <th>APPLICATION NO.</th>
                    <th>FIRSTNAME</th>
                    <th>LASTNAME</th>
                    <th>MIDDLENAME</th>
                    <th>EMAIL</th>
                    <th>GENDER</th>
                    <th>COURSE</th>
                    <th>PHONE</th>
                    <th>STATUS</th>
                    <th colspan="3" class="text-center">ACTION</th>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows == 0) {
                    ?>
                        <tr>
                            <td class="text-center" colspan="11">
                                <<<<< NO RECORD FOUND>>>>>
                            </td>
                        </tr>
                        <?php
                    } else {

                        $count = 1;
                        while ($row = $result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td><?php echo $count ?></td>
                                <td><?php echo $row["application_no"] ?></td>
                                <td><?php echo $row["first_name"] ?></td>
                                <td><?php echo $row["last_name"] ?></td>
                                <td><?php echo $row["middle_name"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["gender"] ?></td>
                                <td><?php echo $row["course"] ?></td>
                                <td><?php echo $row["phone"] ?></td>
                                <td>
                                    <?php echo ($row["admission_status"]) == 0 ? "Waiting" : "Admitted" ?></td>

                                <td>
                                    <a href="view.php?application_no=<?php echo $row["application_no"] ?>">
                                        <button class="btn btn-info">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </a>

                                </td>
                                <td>
                                    <a href="edit.php?application_no=<?php echo $row["application_no"] ?>">
                                        <button class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="delete.php?application_no=<?php echo $row["application_no"] ?>">
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                    <?php
                            $count++;
                        }
                    }
                    ?>

                </tbody>

            </table>
        </div>
    </div>
</body>

</html>