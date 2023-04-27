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
                                            <td bgcolor="#32ff7e">Outstanding</td>
                                            <td bgcolor="#32ff7e">90-100</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#7bed9f">Very Satisfactory</td>
                                            <td bgcolor="#7bed9f">85-89</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#97fdae">Satisfactory</td>
                                            <td bgcolor="#97fdae">80-84</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#fffa65">Fairly Satisfactory</td>
                                            <td bgcolor="#fffa65">75-79</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#ff4757">Did Not Meet Expectations</td>
                                            <td bgcolor="#ff4757">Below 75</td>
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
                                            <td>90 - 100</td>
                                            <td>A+</td>
                                        </tr>
                                        <tr>
                                            <td>85 - 89</td>
                                            <td>B</td>
                                        </tr>
                                        <tr>
                                            <td>80 - 84</td>
                                            <td>C</td>
                                        </tr>
                                        <tr>
                                            <td>75 - 79</td>
                                            <td>D</td>
                                        </tr>
                                        <tr>
                                            <td>Below 74</td>
                                            <td>F</td>
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


                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">
                                    <h3 align="center">Student Records</h3>
                                </strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>

                                            <th>ID #</th>
                                            <th>Subjects</th>
                                            <th>Grade lvl</th>
                                            <th>Grade</th>

                                            <th>Grading</th>
                                            <th>Room</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php


                                        //                                     $sql = mysqli_query($con, "SELECT  tblcourse.`subjectId`, tblstudent.`StudentId` ,
                                        // tbldepartment.`departmentId` ,tblstudent.`firstName`,tblstudent.`lastName`,tblstudent.`contactNumber`,
                                        // tblstudent.`matricNo`,tblstudent.`otherName`,tblstudent.`schoolyear`, tbldepartment.`departmentName`,tblcourse.`subjectTitle`,
                                        // tbllevel.`levelName` 
                                        // FROM tblstudent 
                                        // INNER JOIN tbldepartment ON tbldepartment.`departmentId` = tblstudent.`departmentId` 
                                        // INNER JOIN tbllevel ON tbllevel.`levelId` = tbldepartment.`levelId` 
                                        // INNER JOIN tblcourse ON tblcourse.`departmentId` = tbldepartment.`departmentId` where tbldepartment.`departmentId` = ' $_SESSION[departmentId]' and tblstudent.StudentId =     ' $_SESSION[StudentId] ' and tbldepartment.departmentId = '$_SESSION[departmentId] '");

                                        $sql = mysqli_query($con, "SELECT tblresult.`resultId`, tblcourse.`subjectTitle`,tbllevel.`levelName`, tblresult.`grade`, tblsemester.`grading` ,tbldepartment.`departmentName` FROM tblresult 
INNER JOIN tblstudent ON tblstudent.`StudentId` = tblresult.`StudentId` 
INNER JOIN tblcourse ON tblcourse.`subjectId` = tblresult.`subjectId` 
INNER JOIN tbldepartment ON tbldepartment.`departmentId` = tblresult.`departmentId`
INNER JOIN tbllevel ON tbllevel.`levelId` = tbldepartment.`levelId` 
INNER JOIN tblsemester ON tblsemester.`grading_Id` = tblresult.`gradingId` WHERE tblstudent.`matricNo` =  '$_SESSION[matricNo]' ;
 ");
                                        while ($row = mysqli_fetch_array($sql)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['resultId']; ?></td>
                                                <td><?php echo $row['subjectTitle'] ?> </td>

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
                                                <td><?php echo $row['grade']; ?></td>
                                                <td><?php echo $row['grading']; ?></td>
                                                <td><?php echo $row['departmentName']; ?></td>
                                                <!-- <td><a href="viewGradeResult.php?subjectId=<?php echo $row['subjectId']; ?>&semesterId=1&matricNo=<?php echo $row['matricNo']; ?>&departmentId=<?php echo $row['departmentId']; ?>" title="View Details"><i class="fa fa-eye fa-1x"></i> View</a></td>

                                                <td><a href="viewGradeResult.php?subjectId=<?php echo $row['subjectId']; ?>&semesterId=2&matricNo=<?php echo $row['matricNo']; ?>&departmentId=<?php echo $row['departmentId']; ?>" title="View Details"><i class="fa fa-eye fa-1x"></i> View</a></td>

                                                <td><a href="viewGradeResult.php?subjectId=<?php echo $row['subjectId']; ?>&semesterId=3&matricNo=<?php echo $row['matricNo']; ?>&departmentId=<?php echo $row['departmentId']; ?>" title="View Details"><i class="fa fa-eye fa-1x"></i> View</a></td>

                                                <td><a href="viewGradeResult.php?subjectId=<?php echo $row['subjectId']; ?>&semesterId=4&matricNo=<?php echo $row['matricNo']; ?>&departmentId=<?php echo $row['departmentId']; ?>" title="View Details"><i class="fa fa-eye fa-1x"></i> View</a></td> -->



                                            </tr>
                                        <?php

                                        } ?>


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

        <!--Local Stuff-->

</body>

</html>