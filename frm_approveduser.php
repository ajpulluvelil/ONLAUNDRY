<?php
include("frm_connection.php");
session_start();
ob_start();
$currentuser = $_SESSION['username'];
?>
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
                            <a class="navbar-brand" href="frm_adminpage.php">Dashboard</a>
                        </div>
                    </div>
                </nav>


                <div class="content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title">Approved Users</h4>
                                                    <p class="category">Table shows the details about the all approved users</p>
                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <th>ID</th>
                                                        <th>NAME</th>
                                                        <th>HOUSE NAME</th>
                                                        <th>ADDRESS</th>
                                                        <th>PIN CODE</th>
                                                        <th>PHONE NUMBER</th>
                                                        <th>EMAIL</th>
                                                        <th>USERNAME</th>
                                                        <th>PASSWORD</th>
                                                        <th>TYPE</th>
                                                        <th>Deny</th>
                                                        </thead>
                                                        <tbody>        
                                                            <?php
                                                            $sql = mysqli_query($con, "select * from tbl_login where status = 1");
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
                                                                    <td><?php echo $row[10]; ?>
                                                                    </td>
                                                                    </td>
                                                                    <td><a href="frm_userdeny.php?id=<?php echo $row[0]; ?>">Deny</a>
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



                    </div>
                </div>


                </body>


                </html>
