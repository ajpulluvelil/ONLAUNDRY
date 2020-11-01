<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    echo"could not connect" . mysqli_error();
}
mysqli_select_db($con, "onlaundry");
?>
