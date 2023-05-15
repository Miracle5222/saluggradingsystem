<?php

include('../includes/session.php');
include('../includes/dbconnection.php');
error_reporting(0);

?>

<?php
if (isset($_GET["q"])) {
    $q = $_GET["q"];
    $sql = "SELECT * FROM tblstudent WHERE firstName LIKE '%$q%' and departmentId = '$_SESSION[departmentId]'";
    $result = $con->query($sql);

    // Output results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>

            <a class="text-info" href="staffPupilsGrade.php?studentId=<?= $row['StudentId'] ?>"><?= $row['firstName'] . " " . $row['lastName'] ?></a>
<?php }
    } else {
        echo "Pupil not found..";
    }

    // Close connection
    $con->close();
}
?>