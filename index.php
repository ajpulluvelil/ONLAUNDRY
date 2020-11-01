<?php
include("frm_connection.php");
session_start();
ob_start();
//$currentuser = $_SESSION['Username'];
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
            <br>
            <br>

            <div class="main-panel">


                <div class="content">
                    <div class="container-fluid">
                        <div class="col-lg-10 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h1 class="title text-center"><b>ONLAUNDRY</b> Your perfect laundry partner</h1>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Already have an account? | Log In!</h4>
                                </div>
                                <div class="content">
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control border-input"  placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="form-control border-input"  placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" value="" class="btn btn-info btn-fill btn-wd">Log In</button>
                                            <?php
                                            $msg = '';
                                            if (isset($_POST['login'])) {
                                                $username = $_POST['username'];
                                                $_SESSION['username'] = $username;
                                                $password = $_POST['password'];
                                                $sql = mysqli_query($con, "select * from tbl_login where username='$username' and password='$password' and status='1'");
                                                $ar = mysqli_fetch_array($sql);
                                                if ($ar) {
                                                    $_SESSION['id'] = $ar['id'];
                                                    $_SESSION['username'] = $ar['username'];
                                                    $_SESSION['password'] = $ar['password'];
                                                    $_SESSION['usertype'] = $ar['usertype'];
                                                    if ($ar['type'] == "admin") {
                                                        header('location:frm_adminpage.php');
                                                    } elseif ($ar['type'] == 'user') {
                                                        header('location:frm_userpage.php');
                                                    }
                                                } else {
                                                    $message = "Username and/or Password incorrect.\\nTry again.";
                                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-7">
                            <div class="card">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Don't have an account? | Create one!</h4>
                                    </div>
                                    <div class="content">
                                        <form method="post" action="">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" name="username" class="form-control border-input"  placeholder="" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name="password" class="form-control border-input"  placeholder="" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" name="create" value="" class="btn btn-info btn-fill btn-wd">Create Now</button>
                                                <?php
                                                // put your code here
                                                if (isset($_POST['create'])) {
                                                    $username = $_POST['username'];
                                                    $password = $_POST['password'];
                                                    $con = mysql_query("insert into tbl_login(id,name,housename,address,pincode,phonenumber,email,username,Password,status,type)"
                                                            . "values('','','','','','','','$username','$password','0','user')");
                                                    $message = "Read the instructions";
                                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                                }
                                                ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-10 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h5 class="title text-center"><b>INSTRUCTIONS</b></h5>
                                    <br>
                                    <h5 class="title">1.    If you have created a new account wait for 24 hour for the approval. After 24 hour you will be able to log in to your account.</h5>
                                    <br>
                                    <h5 class="title">2.    After the first log in, You must update your personal details. All details are essential to locate you, So you must update it.</h5>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    <script type="text/javascript">
        $(document).on('click', '.formsubmitbutton', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(".form").attr('action'),
                data: $(".form").serialize(),
                success: function (response) {
                    if (response === "success") {
                        window.reload;
                    } else {
                        alert("invalid username/password.  Please try again");
                    }
                }
            });
        });
    </script>

</html>
