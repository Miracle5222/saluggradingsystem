<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>


<!-- forgot password form validation -->

<?php

if (isset($_POST['submit'])) {
    $staffId = $_POST['staffId'];
    $Currpassword = $_POST['Currpassword'];
    $Newpassword = $_POST['Newpassword'];
    $ConNewpassword = $_POST['ConNewpassword'];

    $query = mysqli_query($con, "select * from tblstaff where  staffId='$staffId' && password='$Currpassword'");
    $count = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    if ($count > 0) {
        if ($Newpassword != $ConNewpassword) {
            $errorMsg = "<div class='alert alert-danger' role='alert'>Pasword Don't Matched</div>";
        } else {
            $query = mysqli_query($con, "select * from tblstaff where staffId='$staffId' and password='$Currpassword'");
            $rows = mysqli_fetch_array($query);
            if ($rows > 0) {
                $ret = mysqli_query($con, "update tblstaff set password='$Newpassword' where staffId='$staffId'");


                $errorMsg = "<div class='alert alert-success' role='alert'>Updated successfully</div>";
            } else {
                $errorMsg = "<div class='alert alert-success' role='alert'>Failed to update password</div>";
            }
        }
    } else {
        $errorMsg = "<div class='alert alert-danger' role='alert'>Wrong Id or Password</div>";
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
                        <?php echo $errorMsg; ?>
                        <strong>
                            <h2 align="center">Forgot Password</h2>
                        </strong>
                        <hr>
                        <div class="form-group">
                            <label>User</label>

                            <input class="form-control" type="text" placeholder="staff_ID" name="staffId" required />

                        </div>
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" name="Currpassword" Required class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="Newpassword" Required class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" name="ConNewpassword" Required class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label class="pull-left">
                                <a href="staffLogin.php">Go Back</a>
                            </label>

                        </div>
                        <br>
                        <!-- Log on to codeastro.com for more projects! -->
                        <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Log in</button>



                        <!-- <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div> -->
                        <!-- <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div> -->
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