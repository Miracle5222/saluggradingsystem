
<?php

    include('../includes/dbconnection.php');
    include('../includes/session.php');
error_reporting(0);

if(isset($_POST['submit'])){

     $alertStyle ="";
      $statusMsg="";

  $facultyName=$_POST['facultyName'];
  $dateCreated = date("Y-m-d");


    $query=mysqli_query($con,"select * from tblfaculty where facultyName ='$facultyName'");
    $ret=mysqli_fetch_array($query);
    if($ret > 0){

      $alertStyle ="alert alert-danger";
<<<<<<< HEAD
      $statusMsg="This Faculty already exist!";
=======
      $statusMsg="This Room already exist!";
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2

    }
    else{

  $query=mysqli_query($con,"insert into tblfaculty(facultyName,dateCreated) value('$facultyName','$dateCreated')");

    if ($query) {

      $alertStyle ="alert alert-success";
<<<<<<< HEAD
      $statusMsg="Faculty Added Successfully!";
=======
      $statusMsg="Classroom Added Successfully!";
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
  }
  else
    {
      $alertStyle ="alert alert-danger";
      $statusMsg="An error Occurred!";
    }
  }
}
  ?>

<<<<<<< HEAD
<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
=======
<!doctype html><html class="no-js" lang="">
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'includes/title.php';?>
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

<<<<<<< HEAD
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->
    <?php $page="faculty"; include 'includes/leftMenu.php';?>

   <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

=======

</head>
<body>
    <?php $page="faculty"; include 'includes/leftMenu.php';?>

>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
    <div id="right-panel" class="right-panel">

        <!-- Header-->
            <?php include 'includes/header.php';?>
<<<<<<< HEAD
        <!-- /header -->
        <!-- Header-->
=======
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2

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
<<<<<<< HEAD
                                    <li><a href="#">Faculty</a></li>
                                    <li class="active">Add Faculty</li>
=======
                                    <li><a href="#">Classroom</a></li>
                                    <li class="active">Add room</li>
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
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
<<<<<<< HEAD
                            <div class="card-header">
                                <strong class="card-title"><h2 align="center">Add New Faculty</h2></strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
=======
                            
                            <div class="card-body">
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
                                <div id="pay-invoice">
                                    <div class="card-body">
                                       <div class="<?php echo $alertStyle;?>" role="alert"><?php echo $statusMsg;?></div>
                                        <form method="Post" action="">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
<<<<<<< HEAD
                                                        <label for="cc-exp" class="control-label mb-1">Faculty</label>
                                                        <input id="" name="facultyName" type="tel" class="form-control cc-exp" value="" placeholder="Faculty Name">
=======
                                                        <label for="cc-exp" class="control-label mb-1">Classroom Name: <i class="text-danger">*</i></label>
                                                        <input id="" name="facultyName" type="tel" class="form-control cc-exp" value="" placeholder="Room Name">
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
                                                    </div>
                                                </div>
                                                
                                                    </div>
                                                    <div>
<<<<<<< HEAD
												<!-- Log on to codeastro.com for more projects! -->
                                                <button type="submit" name="submit" class="btn btn-success">Add Faculty</button>
=======
                                                <button type="submit" name="submit" class="btn btn-success">Add Room</button>
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD
                        </div> <!-- .card -->
                    </div><!--/.col-->
=======
                        </div>
                    </div>
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
               

                <br><br>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
<<<<<<< HEAD
                                <strong class="card-title"><h2 align="center">All Faculty</h2></strong>
=======
                                <strong class="card-title"><h2 align="center">Classroom List</h2></strong>
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
<<<<<<< HEAD
											<!-- Log on to codeastro.com for more projects! -->
                                            <th>#</th>
                                            <th>Faculty</th>
                                            <th>Date Created</th>
=======
                                            <th>#</th>
                                            <th>Classroom</th>
                                            <th>Date Added</th>
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
                                            <th>Edit</th>
                                            <th>Delete</th>                                           
                                            </tr>
                                    </thead>
                                    <tbody>
                                      
                            <?php
        $ret=mysqli_query($con,"SELECT * from tblfaculty");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {
                            ?>
                <tr>
                <td><?php echo $cnt;?></td>
                <td><?php  echo $row['facultyName'];?></td>
                <td><?php  echo $row['dateCreated'];?></td>
<<<<<<< HEAD
				<!-- Log on to codeastro.com for more projects! -->
                <td><a href="editFaculty.php?editid=<?php echo $row['Id'];?>" title="Edit Faculty Details"><i class="fa fa-edit fa-1x"></i></a></td>
                <td><a onclick="return confirm('Are you sure you want to delete?')" href="deleteFaculty.php?delid=<?php echo $row['Id'];?>" title="Delete Faculty Details"><i class="fa fa-trash fa-1x"></i></a></td>
=======
                <td><a href="editFaculty.php?editid=<?php echo $row['Id'];?>" title="Edit Faculty Details"><i class="fa fa-edit fa-1x"></i></a></td>
                <td><a onclick="return confirm('Are you sure you want to delete?')" href="deleteFaculty.php?delid=<?php echo $row['Id'];?>" title="Delete Room Details"><i class="fa fa-trash fa-1x"></i></a></td>
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
                </tr>
                <?php 
                $cnt=$cnt+1;
                }?>
                                                                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
<!-- end of datatable -->

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
=======
<!-- end sa datatable -->

            </div>
        </div>
    </div>
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2

    <div class="clearfix"></div>

        <?php include 'includes/footer.php';?>


<<<<<<< HEAD
</div><!-- /#right-panel -->

<!-- Right Panel -->
=======
</div>


>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2

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
      } );

      // Menu Trigger
      $('#menuToggle').on('click', function(event) {
            var windowWidth = $(window).width();   		 
            if (windowWidth<1010) { 
                $('body').removeClass('open'); 
                if (windowWidth<760){ 
                $('#left-panel').slideToggle(); 
                } else {
                $('#left-panel').toggleClass('open-menu');  
                } 
            } else {
                $('body').toggleClass('open');
                $('#left-panel').removeClass('open-menu');  
            } 
                
            }); 
<<<<<<< HEAD

      
=======
>>>>>>> 1bb09366e33d936fac926359eee432755bfd56e2
  </script>

</body>
</html>
