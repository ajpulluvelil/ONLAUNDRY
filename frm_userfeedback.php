<?php
include("frm_connection.php");
session_start();
ob_start();
$date = date('Y/m/d H:i:s');
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
                            <a class="navbar-brand" href="frm_userpage.php">Dashboard</a>
                        </div>
                    </div>
                </nav>


                <div class="content">
                    <div class="container-fluid">
                        <div class="col-lg-9 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Feedback Response</h4>
                                </div>
                                <div class="content">
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Message to laundry</label>
                                                    <textarea rows="5" name="message" class="form-control border-input" placeholder="" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Replay from Laundry</label>
                                                    <textarea rows="5" name="replay" class="form-control border-input" placeholder="" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" value="" class="btn btn-info btn-fill btn-wd">Send Feedback</button>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $feedback = $_POST['message'];
                                                mysqli_query($con, "insert into tbl_feedback(message,replay,date,username)values('$feedback','nill','$date','$currentuser')");
                                                header('location:frm_userfeedbackview.php');
                                            }
                                            ?>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
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
