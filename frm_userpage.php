<?php
include("frm_connection.php");
session_start();
$date = date('Y/m/d H:i:s');
ob_start();
$currentuser = $_SESSION['username'];
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
                                    <a href="frm_userfeedback.php">
                                        <i class="ti-menu"></i>
                                        <p>Feedback</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="frm_logout.php">
                                        <i class="ti-alert"></i>
                                        <p>Logout</p>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </nav>


                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="icon-big icon-success text-center">
                                                    <i class="ti-wallet"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="numbers">
                                                    <p>Check Laundry</p>
                                                    ONLAUNDRY
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <i class="ti-calendar"></i> <a href="frm_checklaundry.php">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="icon-big icon-danger text-center">
                                                    <i class="ti-pulse"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="numbers">
                                                    <p>All Laundry</p>
                                                    ONLAUNDRY
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <i class="ti-timer"></i> <a href="frm_userlaundry.php">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="icon-big icon-info text-center">
                                                    <i class="ti-twitter-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="numbers">
                                                    <p>My Account</p>
                                                    ONLAUNDRY
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <i class="ti-reload"></i> <a href="frm_useraccount.php">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="container-fluid">
                                    <div class="col-lg-9 col-md-7">
                                        <div class="card">
                                            <div class="header">
                                                <h4 class="title">Book New Laundry</h4>
                                            </div>
                                            <div class="content">
                                                <form method="post" action="">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label>Shirt</label>
                                                                <input type="text" class="form-control border-input" name="shirt" placeholder="" value="" onkeypress="return isNumberKey(event)" maxlength="3" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Pants</label>
                                                                <input type="text" name="pants" class="form-control border-input"  placeholder="" value="" onkeypress="return isNumberKey(event)" maxlength="3" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Swetter</label>
                                                                <input type="text" name="swetter" class="form-control border-input" placeholder="" value="" onkeypress="return isNumberKey(event)" maxlength="3" >
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Lungi</label>
                                                                <input type="text" name="lungi" class="form-control border-input" placeholder="" value="" onkeypress="return isNumberKey(event)" maxlength="3" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Bed Sheet</label>
                                                                <input type="text" name="bedsheet" class="form-control border-input" placeholder="" value="" onkeypress="return isNumberKey(event)" maxlength="3" >
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Blanket</label>
                                                                <input type="text" name="blanket" class="form-control border-input" value="" onkeypress="return isNumberKey(event)" maxlength="3" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Banian</label>
                                                                <input type="text" name="banian" class="form-control border-input" placeholder="" value="" onkeypress="return isNumberKey(event)" maxlength="3" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Towel</label>
                                                                <input type="text" name="towel" class="form-control border-input" placeholder="" value="" onkeypress="return isNumberKey(event)" maxlength="3" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" name="submit" value="" class="btn btn-info btn-fill btn-wd">Book Now</button>
                                                        <?php
                                                        // put your code here
                                                        if (isset($_POST['submit'])) {
                                                            $shirt = $_POST['shirt'];
                                                            $pants = $_POST['pants'];
                                                            $swetter = $_POST['swetter'];
                                                            $lungi = $_POST['lungi'];
                                                            $bedsheet = $_POST['bedsheet'];
                                                            $blanket = $_POST['blanket'];
                                                            $banian = $_POST['banian'];
                                                            $towel = $_POST['towel'];
                                                            $con = mysqli_query($con, "insert into tbl_laundry(shirt,pants,swetter,lungy,bedsheet,blanket,banian,towel,date,username,status)values('$shirt','$pants','$swetter','$lungi','$bedsheet','$blanket','$banian','$towel','$date','$currentuser','0')");
                                                            header('location:frm_userpage.php');
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
                                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="">ajdesign</a>
                                    </div>
                                </div>
                            </footer>

                        </div>
                    </div>


                    </body>
                    <script>
                        function ValidateAlpha(evt)
                        {
                            var keyCode = (evt.which) ? evt.which : evt.keyCode
                            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
                            {
                                alert("enter alphabets only");
                                return false;
                            }
                            return true;
                        }
                        function isNumberKey(evt) {<!--Function to accept only numeric values-->
                            //var e = evt || window.event;
                            var charCode = (evt.which) ? evt.which : evt.keyCode
                            if (charCode != 46 && charCode > 31
                                    && (charCode < 48 || charCode > 57))
                            {
                                alert("enter numbers only");
                                return false;
                            }
                            return true;
                        }
                        function validateemail(x)
                        {
                            //var x = document.forms["hai"]["b"].value;
                            var atpos = x.indexOf("@");
                            var dotpos = x.lastIndexOf(".");
                            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                                alert("Not a valid e-mail address");
                                x.value = "";
                                return false;
                            }

                        }

                    </script> 

                    </html>
