<?php

include('../includes/dbconnection.php');
include('../includes/session.php');

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
    <?php $page = "student";
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
                                    <li><a href="#">Pupils</a></li>
                                    <li class="active">View Pupils</li>
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


                        </div> <!-- .card -->
                    </div>
                    <!--/.col-->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">
                                    <h2 align="center">All Pupils</h2>
                                </strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>StudentID</th>
                                            <th>Grade lvl</th>

                                            <th>Section</th>

                                            <th>Date Added</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        if ($_SESSION['adminTypeId'] == 1) {
                                            $ret = mysqli_query($con, "SELECT * FROM tblstudent INNER JOIN tbldepartment ON  tbldepartment.`departmentId` = tblstudent.`departmentId` INNER JOIN tbllevel ON tbllevel.`levelId` = tbldepartment.`levelId`
                                            ");
                                        } else {
                                            $ret = mysqli_query($con, "SELECT * FROM tblstudent INNER JOIN tbldepartment ON  tbldepartment.`departmentId` = tblstudent.`departmentId` INNER JOIN tbllevel ON tbllevel.`levelId` = tbldepartment.`levelId` where tbldepartment.departmentId = ' $_SESSION[departmentId]' ");
                                        }

                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($ret)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $cnt; ?></td>
                                                <td><?php echo $row['firstName'] . ' ' . $row['lastName']  ?></td>
                                                <td><?php echo $row['matricNo']; ?></td>
                                                <td>

                                                    <?php
                                                    $lvl = $row['levelName'];

                                                    if ($lvl == "Grade 1") {
                                                        echo '<i style="background:#99d98c; border-radius:15px; color: black; padding: 2px 5px 2px 5px; font-family:cursive; font-size: 16px;" class="text-white  ">' . $lvl . '</i>';
                                                    } else if ($lvl == "Grade 2") {
                                                        echo '<i style="background:#76c893; border-radius:15px; color: black; padding: 2px 4px 2px 4px; font-family:cursive; font-size: 16px;" class="text-white ">' . $lvl . '</i>';
                                                    } else if ($lvl == "Grade 3") {
                                                        echo '<i style="background:#52b69a; border-radius:15px; color: black; padding: 2px 4px 2px 4px; font-family:cursive; font-size: 16px;" class="text-white ">' . $lvl . '</i>';
                                                    } else if ($lvl == "Grade 4") {
                                                        echo '<i style="background:#34a0a4; border-radius:15px; color: black; padding: 2px 4px 2px 4px; font-family:cursive; font-size: 16px;" class="text-white ">' . $lvl . '</i>';
                                                    } else if ($lvl == "Grade 5") {
                                                        echo '<i style="background:#168aad; border-radius:15px; color: black; padding: 2px 4px 2px 4px; font-family:cursive; font-size: 16px;" class="text-white ">' . $lvl . '</i>';
                                                    } else {
                                                        echo '<i style="background:#1a759f; border-radius:15px; color: black; padding: 2px 4px 2px 4px; font-family:cursive; font-size: 16px;" class="text-white ">' . $lvl . '</i>';
                                                    }
                                                    ?>

                                                </td>
                                                <!-- <td><?php echo $row['facultyName']; ?></td> -->
                                                <td><?php echo $row['departmentName']; ?></td>

                                                <td><?php echo $row['dateCreated']; ?></td>

                                                <td>
                                                    <!-- <a href="editStudent.php?editStudentId=<?php echo $row['matricNo']; ?>" title="Edit Details">
                                                        <i class="fa fa-edit fa-1x"></i>
                                                    </a> -->

                                                    <a onclick="return confirm('Are you sure you want to delete?')" href="deleteStudent.php?delid=<?php echo $row['matricNo']; ?>" title="Delete Student Details">
                                                        <i class="fa fa-trash fa-1x"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                            $cnt = $cnt + 1;
                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end of datatable -->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

        <?php include 'includes/footer.php'; ?>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

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