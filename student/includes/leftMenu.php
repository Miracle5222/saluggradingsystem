<?php

$query = mysqli_query($con, "SELECT * FROM tblstudent WHERE matricNo='$matricNo'");
$row = mysqli_fetch_array($query);
$fullName = $row['firstName'] . ' ' . $row['lastName'];
$departmentId = $row['departmentId'];


?>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-title">Pupil :&nbsp;<?php echo $fullName; ?></li>
                <li class="<?php if ($page == 'dashboard') {
                                echo 'active';
                            } ?>">
                </li>


                <li class="menu-item-has-children dropdown <?php if ($page == 'result') {
                                                                echo 'active';
                                                            } ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Grades</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-eye"></i> <a href="studentGrades.php"> View Grades</a></li>
                        <li><i class="fa fa-eye"></i> <a href="finalStudentGrades.php?departmentId=<?php echo $row['departmentId']; ?>&StudentId=<?php echo $row['StudentId']; ?> "> View Final Grades</a></li>
                        <!-- <li><i class="fa fa-eye"></i> <a href="quizResult.php">Quiz Result</a></li> -->

                    </ul>
                </li>

                <!-- <li class="menu-title">Profile</li>/.menu-title -->
                <li class="menu-item-has-children dropdown <?php if ($page == 'profile') {
                                                                echo 'active';
                                                            } ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Profile</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-user-circle "></i><a href="profile.php"> View Profile</a></li>
                        <li><i class="menu-icon fa fa-user-circle"></i><a href="updateProfile.php"> Update Profile</a></li>
                        <!-- <li><i class="menu-icon fa fa-sign-in"></i><a href="changePassword.php">Change Password</a></li> -->
                </li>

            </ul>
            <li>
                <a href="logout.php"> <i class="menu-icon fa fa-power-off"></i>Logout </a>
            </li>
            </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>