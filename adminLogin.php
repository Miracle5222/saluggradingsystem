<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');

<<<<<<< HEAD
if (isset($_POST['login'])) {
    $staffId = $_POST['staffId'];
    // $password=md5($_POST['password']);
    $password = $_POST['password'];
    // $password = md5($password);
    $query = mysqli_query($con, "select * from tbladmin where  staffId='$staffId' && password='$password'");
    $count = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
=======
    if(isset($_POST['login']))
    {
        $staffId=$_POST['uname'];
        $password=$_POST['password'];
        $password = md5($password);
        $query = mysqli_query($con,"select * from tbladmin where  staffId='$staffId' && password='$password'");
        $count = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
>>>>>>> bef7c1218c665a683b2c3a439f19ea6632badc80

    if ($count > 0) {
        $_SESSION['staffId'] = $row['staffId'];
        $_SESSION['emailAddress'] = $row['emailAddress'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['adminTypeId'] = $row['adminTypeId'];

        if ($_SESSION['adminTypeId'] == 1) // SuperAdministrator
        {
            echo "<script type = \"text/javascript\">
                window.location = (\"superAdmin/index.php\")
<<<<<<< HEAD
                </script>";
        } else if ($_SESSION['adminTypeId'] == 2) // Administrator
=======
                </script>";  
            }

            else if($_SESSION['adminTypeId'] == 2) // Staff
            {
                echo "<script type = \"text/javascript\">
                window.location = (\"staff/index.php\")
                </script>";  
            }
        }
        else
>>>>>>> bef7c1218c665a683b2c3a439f19ea6632badc80
        {
            echo "<script type = \"text/javascript\">
                window.location = (\"admin/index.php\")
                </script>";
        }
    } else {
        $errorMsg = "<div class='alert alert-danger' role='alert'>Invalid Username/Password!</div>";
    }
}
?>



<!doctype html>
<<<<<<< HEAD
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

=======
<html class="no-js" lang="">
>>>>>>> bef7c1218c665a683b2c3a439f19ea6632badc80
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Grading PHP</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="img/favicon2.jpeg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-light">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                    </a>
                </div>
                <div class="login-form">
                    <form method="Post" Action="">
<<<<<<< HEAD
                        <?php echo $errorMsg; ?>
                        <strong>
                            <h2 align="center">Administrator Login</h2>
                        </strong>
=======
                            <?php echo $errorMsg; ?>
                        <h3><strong class="text-success">Hi, Please Login</strong></h3>
>>>>>>> bef7c1218c665a683b2c3a439f19ea6632badc80
                        <hr>
                        <div class="form-group">
                            <label>User</label>


                                <?php 
                                        $query=mysqli_query($con,"select * from tbladmin ORDER BY firstName ASC");                        
                                        $count = mysqli_num_rows($query);
                                        if($count > 0){                       
                                            echo ' <select required name="uname" class="custom-select form-control">';
                                            echo'<option value="">Choose User</option>';
                                            while ($row = mysqli_fetch_array($query)) {

                                            $type = $row['otherName'];

                                            echo'<option value="'.$row['staffId'].'" >'.'['.$type .'] ' .$row['firstName'].' '.$row['lastName'].'</option>';

                                            }
                                            echo '</select>';
                                            }
                                            ?>    





                                <!-- <?php 
                                    $query=mysqli_query($con,"select * from tbladmin ORDER BY firstName ASC");                        
                                    $count = mysqli_num_rows($query);
                                        if($count > 0){                       
                                            echo '<select required name="othername" onchange="showValues(this.value)" class="custom-select form-control">';
                                            echo'<option value="">-- Choose User --</option>';
                                        while ($row = mysqli_fetch_array($query)) {

                                            echo'<option value="'.$row['staffId'].'">';

                                            $id = $row['staffId'];
                                            $name = $row['firstName'];
                                            $type = $row['otherName'];

                                            echo '['.$type.'] '.$name .' '.$row['lastName'];

                                            echo '</option>';
                                            }
                                            echo '</select>';
                                            }
                                ?>  -->
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" Required class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
<<<<<<< HEAD
                            <label class="pull-left">
                                <a href="index.php">Go Back</a>
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgot Password?</a>
                            </label>
                        </div>
                        <br>
                        <!-- Log on to codeastro.com for more projects! -->
                        <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Log in</button>



                        <!-- <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div> -->
                        <!-- <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div> -->
=======
                           <label class="pull-left">
                                <small><a class="text-success" href="index.php">Go to main page</a></small>
                            </label>
                        </div>
                        <br><!-- Log on to codeastro.com for more projects! -->
                        <button type="submit" name="login" class="btn btn-info btn-flat m-b-30 m-t-30">Log in</button>
                        
                        <div class="register-link m-t-15 text-center"><br>
                            <p>Sign Up <a class="text-success" href="staff/signup.php"><b>here!<b></a></p>
                        </div>
>>>>>>> bef7c1218c665a683b2c3a439f19ea6632badc80
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>