<?php
include("frm_connection.php");
session_start();
ob_start();
$currentuser = $_SESSION['username'];
$sql = mysqli_query($con, "SELECT * FROM tbl_login");
$tot_user = mysqli_num_rows($sql);
$sql1 = mysqli_query($con, "SELECT * FROM tbl_staff");
$tot_staff = mysqli_num_rows($sql1);
$sql2 = mysqli_query($con, "SELECT * FROM tbl_laundry where status = '1'");
$tot_laundry = mysqli_num_rows($sql2);
$sql3 = mysqli_query($con, "SELECT * FROM tbl_laundry where status = '0'");
$tot_pending = mysqli_num_rows($sql3);
?>
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title>ONLAUNDRY</title>
    </head>
    <body>
        <a href="frm_alluser.php">All User</a>
        <a href="frm_approveduser.php">Approved User</a>
        <a href="frm_denieduser.php">Denied User</a>
        <a href="frm_addstaff.php">Add Staff</a>
        <a href="frm_viewstaff.php">View Staff</a>
        <a href="frm_alllaundry.php">All Laundry</a>
        <a href="frm_laundrystatus.php">Laundry Status</a>
        <a href="frm_myaccount.php">My Account</a>
<?php
// put your code here
// echo 'admin';
?>
    </body>
</html>-->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>ONLAUNDRY</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Paper Dashboard core CSS    -->
        <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />


        <!--  Fonts and icons     -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/themify-icons.css" rel="stylesheet">

    </head>
    <body>

        <div class="wrapper">
            <div class="sidebar" data-background-color="white" data-active-color="danger">

                <!--
                            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
                            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
                -->

                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="frm_adminpage.php" class="simple-text">
                            ONLAUNDRY
                        </a>
                    </div>

                    <ul class="nav">
                        <li class="active">
                            <a href="frm_adminpage.php">
                                <i class="ti-panel"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="frm_alluser.php">
                                <i class="ti-user"></i>
                                <p>All Users</p>
                            </a>
                        </li>
                        <li>
                            <a href="frm_approveduser.php">
                                <i class="ti-view-list-alt"></i>
                                <p>Approved User</p>
                            </a>
                        </li>
                        <li>
                            <a href="frm_denieduser.php">
                                <i class="ti-text"></i>
                                <p>Denied User</p>
                            </a>
                        </li>
                        <li>
                            <a href="frm_addstaff.php">
                                <i class="ti-pencil-alt2"></i>
                                <p>New Staff</p>
                            </a>
                        </li>
                        <li>
                            <a href="frm_viewstaff.php">
                                <i class="ti-map"></i>
                                <p>Staff Details</p>
                            </a>
                        </li>
                        <li>
                            <a href="frm_alllaundry.php">
                                <i class="ti-bell"></i>
                                <p>All Laundry</p>
                            </a>
                        </li>
                        <li>
                            <a href="frm_adminfeedbackview.php">
                                <i class="ti-bell"></i>
                                <p>Pending Feedback</p>
                            </a>
                        </li>
                        <li>
                            <a href="frm_adminfeedback.php">
                                <i class="ti-bell"></i>
                                <p>All Feedback</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="frm_myaccount.php">
                                <i class="ti-export"></i>
                                <p>My Account</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar bar1"></span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">Dashboard</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="frm_logout.php">
                                        <i class="ti-alert"></i>
                                        <p>Logout</p>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>


                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-warning text-center">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>Total Users</p>
                                                    <?php echo $tot_user;?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <i class="ti-reload"></i> Updated now
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-success text-center">
                                                    <i class="ti-wallet"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>Total Staff</p>
                                                    <?php echo $tot_staff;?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <i class="ti-calendar"></i> Last day
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-danger text-center">
                                                    <i class="ti-pulse"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>Total Laundry</p>
                                                    <?php echo $tot_laundry;?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <i class="ti-timer"></i> In the last hour
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-info text-center">
                                                    <i class="ti-twitter-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>Pending Laundry</p>
                                                    <?php echo $tot_pending;?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <i class="ti-reload"></i> Updated now
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title">Pending Laundry</h4>
                                                    <p class="category">Table shows the details about the pending laundry</p>
                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <th>ID</th>
                                                        <th>SHIRT</th>
                                                        <th>PANTS</th>
                                                        <th>SWETTER</th>
                                                        <th>LUNGI</th>
                                                        <th>BED SHEET</th>
                                                        <th>BLANKET</th>
                                                        <th>BANIAN</th>
                                                        <th>TOWEL</th>
                                                        <th>DATE&TIME</th>
                                                        <th>Approve</th>
                                                        </thead>
                                                        <tbody>       
                                                            <?php
                                                            $sql = mysqli_query($con, "select * from tbl_laundry where status = '0'");
                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row[0]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[1]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[2]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[3]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[4]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[5]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[6]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[7]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[8]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[9]; ?>
                                                                    </td>
                                                                    <td><a href="frm_approvelaundry.php?id=<?php echo $row[0]; ?>">Approve</a>
                                                                    </td>

                                                                    <?php
                                                                }
                                                                ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <footer class="footer">
                            <div class="container-fluid">
                                <nav class="pull-left">
                                    <ul>

                                        <li>
                                            <a href="">
                                                ajdesign
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                mine
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Licenses
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="copyright pull-right">
                                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://">ajdesign</a>
                                </div>
                            </div>
                        </footer>

                    </div>
                </div>


                </body>


                </html>
