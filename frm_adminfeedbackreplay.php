<?php
include("frm_connection.php");
session_start();
$currentuser = $_SESSION['username'];
$id = $_GET['id'];
$sql = mysqli_query($con, "select * from  tbl_feedback where id='$id'");
while ($ar = mysqli_fetch_array($sql)) {
    $message = $ar['message'];
    $replay = $ar['replay'];
    $username = $ar['username'];
    $date = $ar['date'];
}
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
                        <div class="col-lg-9 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Feedback Response</h4>
                                </div>
                                <div class="content">
                                    <form method="post" action="">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="name" class="form-control border-input" placeholder="Company" value="<?php echo $username; ?>" onkeypress="return ValidateAlpha(event)" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="text" name="date" class="form-control border-input" placeholder="Last Name" value="<?php echo $date; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Message from customer</label>
                                                    <textarea rows="5" name="message" class="form-control border-input" placeholder="" ><?php echo $message; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Replay to customer</label>
                                                    <textarea rows="5" name="replay" class="form-control border-input" placeholder="" ><?php echo $replay; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" value="" class="btn btn-info btn-fill btn-wd">Send Response</button>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $replay = $_POST['replay'];
                                                mysqli_query($con, "update tbl_feedback set replay='$replay' where date ='$date'");
                                                header('location:frm_adminfeedback.php');
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
