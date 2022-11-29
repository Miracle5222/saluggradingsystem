<?php

include('../includes/dbconnection.php');
include('../includes/session.php');
include('../includes/dataValues.php');

$query = mysqli_query($con, "select * from tblstudent where matricNo='$matricNo'");
$row = mysqli_fetch_array($query)



?>
<!doctype html>
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
    <link rel="stylesheet" href="../assets/css/style2.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <?php $page = "dashboard";
    include 'includes/leftMenu.php'; ?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include 'includes/header.php'; ?>

        <!-- /#header -->
        <!-- Content -->
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 align="center"><b><?php echo $fullName; ?></b></h3>
                    </div>

                </div>
            </div>




        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">
                                    <h3 align="center">GRADING CRITERIA</h3>
                                </strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Results</th>
                                            <th>Average</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td bgcolor="#32ff7e">Excellent</td>
                                            <td bgcolor="#32ff7e">90% +</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#7bed9f">Very nice</td>
                                            <td bgcolor="#7bed9f">85% +</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#97fdae">Nice</td>
                                            <td bgcolor="#97fdae">80% +</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#fffa65">Good</td>
                                            <td bgcolor="#fffa65">75% +</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#ff4757">Failed</td>
                                            <td bgcolor="#ff4757">Below 74</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-------------------------- FROM THE FINAL RESULT TABLE --------------------------->
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Grade</th>
                                            <th>Letter Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>75 - 100</td>
                                            <td>A+</td>
                                        </tr>
                                        <tr>
                                            <td>70 - 74</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>65 - 69</td>
                                            <td>B</td>
                                        </tr>
                                        <tr>
                                            <td>60 - 64</td>
                                            <td>Failed</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->

                <div class="row">

                    <!--/.col-->
                    <?php

                    ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">
                                    <h2 align="center">My Grades</h2>
                                </strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Grades</th>
                                            <th>Grading</th>
                                            <th>Grade Level</th>
                                            <th>Date Added</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $ret = mysqli_query($con, " SELECT tblresult.`resultId`, tblresult.`grade` ,tblcourse.`subjectTitle`, tblstudent.`firstName`,tblstudent.`lastName`,tblstudent.`schoolyear`, tblsemester.`grading`, tbllevel.`levelName` FROM tblresult INNER JOIN tblcourse ON tblcourse.`subjectId` = tblresult.`subjectId`
                                        INNER JOIN tblstudent ON tblstudent.`StudentId` = tblresult.`StudentId` 
                                        INNER JOIN tblsemester ON tblsemester.`grading_Id`= tblresult.`gradingId` 
                                        INNER JOIN tbldepartment ON tbldepartment.`departmentId` = tblresult.`departmentId` 
                                        INNER JOIN tbllevel ON  tbllevel.`levelId` = tbldepartment.`levelId` WHERE tblstudent.`matricNo` = '$_SESSION[matricNo]'");


                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($ret)) {
                                        ?>
                                            <tr>

                                                <td><?= $row['resultId'] ?></td>
                                                <td><?= $row['subjectTitle']; ?></td>
                                                <td><?= $row['firstName']; ?></td>
                                                <td><?= $row['lastName']; ?></td>
                                                <td><?= $row['grade']; ?></td>


                                                <td><?= $row['grading']; ?></td>
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

                                                <td><?= $row['schoolyear']; ?></td>


                                                <td>
                                                    <!-- <a href="editStudent.php?editStudentId=<?php echo $row['matricNo']; ?>" title="Edit Details">
                                                        <i class="fa fa-edit fa-1x"></i>
                                                    </a> -->


                                                </td>
                                            </tr>
                                        <?php

                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">
                                    <h2 align="center">Final Grades</h2>
                                </strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>

                                            <th>Subject</th>
                                            <th>Final Grade</th>
                                            <th>Remarks</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $rets = mysqli_query($con, " SELECT tblresult.`resultId`, tblresult.`grade` ,tblcourse.`subjectTitle`, tblstudent.`firstName`,tblstudent.`lastName`,tblstudent.`schoolyear`, tblsemester.`grading`, tbllevel.`levelName` FROM tblresult INNER JOIN tblcourse ON tblcourse.`subjectId` = tblresult.`subjectId`
                                        INNER JOIN tblstudent ON tblstudent.`StudentId` = tblresult.`StudentId` 
                                        INNER JOIN tblsemester ON tblsemester.`grading_Id`= tblresult.`gradingId` 
                                        INNER JOIN tbldepartment ON tbldepartment.`departmentId` = tblresult.`departmentId` 
                                        INNER JOIN tbllevel ON  tbllevel.`levelId` = tbldepartment.`levelId` WHERE tblstudent.`matricNo` = '$_SESSION[matricNo]'");
                                        $average = 0.0;


                                        while ($rows = mysqli_fetch_array($rets)) { ?>


                                            <tr>
                                                <th><?= $rows['subjectTitle'] ?></th>
                                                <td><?= $rows['grade'] ?></td>

                                                <td>Passed</td>
                                            </tr>

                                        <?php  }



                                        // echo $average / 4;
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
                <!-- .animated -->
            </div>
            <!-- /.content -->
            <div class="clearfix"></div>
            <!-- Footer -->
            <?php include 'includes/footer.php'; ?>
            <!-- /.site-footer -->
        </div>
        <!-- /#right-panel -->

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="../assets/js/main.js"></script>

        <!--  Chart js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

        <!--Chartist Chart-->
        <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
        <script src="../assets/js/init/weather-init.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
        <script src="../assets/js/init/fullcalendar-init.js"></script>

        <!--Local Stuff-->

</body>

</html>