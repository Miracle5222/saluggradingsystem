<?php

include('../includes/dbconnection.php');
include('../includes/session.php');
error_reporting(0);


if (isset($_GET['sectionId'])) {

    $_SESSION['sectionId'] = $_GET['sectionId'];

    $query = mysqli_query($con, "select * from tbldepartment where departmentId='$_SESSION[sectionId]'");
    $rowi = mysqli_fetch_array($query);
} else {

    echo "<script type = \"text/javascript\">
    window.location = (\"index.php\")
    </script>";
}


if (isset($_POST['submit'])) {

    $alertStyle = "";
    $statusMsg = "";

    $facultyId = $_POST['facultyId'];
    $departmentName = $_POST['departmentName'];
    $dateCreated = date("Y-m-d");


    $ret = mysqli_query($con, "update tbldepartment set departmentName='$departmentName', facultyId='$facultyId' where Id='$_SESSION[editId]'");

    if ($ret == TRUE) {

        echo "<script type = \"text/javascript\">
                window.location = (\"viewDepartment.php\");
                </script>";
    } else {

        $alertStyle = "alert alert-danger";
        $statusMsg = "An Error Occurred!";
    }
}




if (isset($_POST['submit'])) {

    $alertStyle = "";
    $statusMsg = "";

    $departmentName = $_POST['departmentName'];
    $level = $_POST['level'];
    $date = date("Y-m-d");


    $ret = mysqli_query($con, "update tbldepartment set departmentName='$departmentName', levelId='$level', dateCreated='$date'
   where departmentId='$_SESSION[sectionId]'");

    if ($ret == TRUE) {

        $alertStyle = "alert alert-success";
        $statusMsg = "Update Success";
    } else {

        $alertStyle = "alert alert-danger";
        $statusMsg = "An Error Occurred!";
    }
}
?>

<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'includes/title.php'; ?>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="../assets/img/student-grade.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style2.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
    <!-- Left Panel -->
    <?php $page = "department";
    include 'includes/leftMenu.php'; ?>

    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include 'includes/header.php'; ?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Sections</a></li>
                                    <li class="active">Edit </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">
                                    <h2 align="center">Edit Details</h2>
                                </strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="<?php echo $alertStyle; ?>" role="alert"><?php echo $statusMsg; ?></div>
                                        <form method="Post" action="">
                                            <div class="row">
                                                <div class="col-6 mb-2">
                                                    <label for="x_card_code" class="control-label mb-1">Grade Level</label>
                                                    <select required name="level" class="custom-select form-control">
                                                        <?php
                                                        $query = mysqli_query($con, "select * from tbllevel ORDER BY levelId ASC");
                                                        $count = mysqli_num_rows($query);
                                                        if ($count > 0) {

                                                            while ($row = mysqli_fetch_array($query)) { ?>
                                                                <option value=" <?= $row['levelId'] ?>"> <?= $row['levelName'] ?> </option>

                                                        <?php  }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Section Name</label>
                                                    <input id="" name="departmentName" type="tel" value="<?= $rowi['departmentName'] ?>" class="form-control cc-cvc" value="" Required data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" placeholder="e.g Charity, Lilac, Rose">
                                                </div>

                                            </div>
                                            <div>

                                                <button type="submit" name="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .card -->
                    </div>
                    <!--/.col-->


                    <!-- end of datatable -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">
                                    <h2 align="center">List of Sections</h2>
                                </strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <!-- Log on to codeastro.com for more projects! -->
                                            <th>Name</th>
                                            <th>Grade</th>
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $ret = mysqli_query($con, "SELECT  tbldepartment.`dateCreated`, tbldepartment.`departmentName`, tbldepartment.`departmentId`,tbllevel.`levelName` FROM tbldepartment INNER JOIN tbllevel ON tbllevel.`levelId` = tbldepartment.`levelId`");

                                        while ($row = mysqli_fetch_array($ret)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['departmentId']; ?></td>
                                                <td><?php echo $row['departmentName']; ?></td>
                                                <td><?php echo $row['levelName']; ?></td>
                                                <td><?php echo $row['dateCreated']; ?></td>
                                                <td><a href="editDepartment.php?sectionId=<?php echo $row['departmentId']; ?>" title="Edit Department"><i class="fa fa-edit fa-1x"></i></a>
                                                    <a onclick="return confirm('Are you sure you want to delete?')" href="deleteDepartment.php?delid=<?php echo $row['departmentId']; ?>" title="Delete Department"><i class="fa fa-trash fa-1x"></i></a>
                                                </td>
                                            </tr>
                                        <?php

                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

        <?php include 'includes/footer.php'; ?>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>

    <script src="../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });

        // Menu Trigger
        $('#menuToggle').on('click', function(event) {
            var windowWidth = $(window).width();
            if (windowWidth < 1010) {
                $('body').removeClass('open');
                if (windowWidth < 760) {
                    $('#left-panel').slideToggle();
                } else {
                    $('#left-panel').toggleClass('open-menu');
                }
            } else {
                $('body').toggleClass('open');
                $('#left-panel').removeClass('open-menu');
            }

        });
    </script>

</body>

</html>