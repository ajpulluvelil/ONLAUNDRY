<?php
include ('frm_connection.php');
$id=$_GET['id'];
$sql=mysqli_query($con, "update tbl_login set status='0' where id ='$id'");
header("Location:frm_adminpage.php");
?>