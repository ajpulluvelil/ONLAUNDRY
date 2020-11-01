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
                                                    <h4 class="title">Feedback</h4>
                                                    <p class="category">Table shows the feedbacks about the laundry management</p>
                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <th>ID</th>
                                                        <th>MESSAGE</th>
                                                        <th>DATE</th>
                                                        <th>USERNAME</th>
                                                        <th>DETAILS</th>
                                                        </thead>
                                                        <tbody>       
                                                            <?php
                                                            $sql = mysqli_query($con, "select * from tbl_feedback where replay = 'nill'");
                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row[0]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[1]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[3]; ?>
                                                                    </td>
                                                                    <td><?php echo $row[4]; ?>
                                                                    </td>
                                                                    <td><a href="frm_adminfeedbackreplay.php?id=<?php echo $row[0]; ?>">View</a>
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



                    </div>
                </div>


                </body>


                </html>
