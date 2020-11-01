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
                        <div class="col-lg-9 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form method="post" action=""">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>ID</label>
                                                    <input type="text" class="form-control border-input" disabled placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control border-input"  placeholder="Name" value="" onkeypress="return ValidateAlpha(event)" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" name="email" class="form-control border-input" placeholder="Email" value="" onchange="return validateemail(this.value)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Land Line</label>
                                                    <input type="text" name="land" class="form-control border-input" value=""onkeypress="return isNumberKey(event)" maxlength="10" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" name="phonenumber" class="form-control border-input" placeholder="Phone Number" value="" onkeypress="return isNumberKey(event)" maxlength="10" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <input type="text" name="gender" class="form-control border-input" placeholder="Male or Female" value="" onkeypress="return ValidateAlpha(event)" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea rows="5" name="address" class="form-control border-input" placeholder="Here can be your description" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" value="" class="btn btn-info btn-fill btn-wd" onclick="valiadte()">Add Staff</button>
                                            <?php
                                            // put your code here
                                            if (isset($_POST['submit'])) {
                                                $name = $_POST['name'];
                                                $address = $_POST['address'];
                                                $email = $_POST['email'];
                                                $phonenumber = $_POST['phonenumber'];
                                                $gender = $_POST['gender'];
                                                $con = mysqli_query($con, "insert into tbl_staff(name,address,email,phonenumber,gender)values('$name','$address','$email','$phonenumber','$gender')");
                                                header('location:frm_adminpage.php');
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
<script src="assets/js/demo.js"></script> <script>
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
