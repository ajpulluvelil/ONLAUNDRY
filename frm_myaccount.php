<?php
include("frm_connection.php");
session_start();
$currentuser = $_SESSION['username'];
$sql = mysqli_query($con, "select * from  tbl_login where username='$currentuser'");
while ($ar = mysqli_fetch_array($sql)) {
    $id = $ar['id'];
    $name = $ar['name'];
    $housename = $ar['housename'];
    $address = $ar['address'];
    $pincode = $ar['pincode'];
    $phonenumber = $ar['phonenumber'];
    $email = $ar['email'];
    $password = $ar['password'];
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
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>ID</label>
                                                    <input type="text" class="form-control border-input" disabled placeholder="Company" value="<?php echo $id; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control border-input" disabled placeholder="Username" value="<?php echo $currentuser; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input type="text" name="password" class="form-control border-input" placeholder="Email" value="<?php echo $password; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control border-input" placeholder="Company" value="<?php echo $name; ?>" onkeypress="return ValidateAlpha(event)" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>House Name</label>
                                                    <input type="text" name="housename" class="form-control border-input" placeholder="Last Name" value="<?php echo $housename; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="email" name="email" class="form-control border-input" value="<?php echo $email; ?>" onchange="return validateemail(this.value)"  required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" name="phonenumber" class="form-control border-input" placeholder="Country" value="<?php echo $phonenumber; ?>" onkeypress="return isNumberKey(event)" maxlength="10" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="text" name="pincode" class="form-control border-input" placeholder="ZIP Code" value="<?php echo $pincode; ?>" onkeypress="return isNumberKey(event)" maxlength="6" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea rows="5" name="address" class="form-control border-input" placeholder="Here can be your description" ><?php echo $address; ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" value="" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $name = $_POST['name'];
                                                $housename = $_POST['housename'];
                                                $address = $_POST['address'];
                                                $pincode = $_POST['pincode'];
                                                $phonenumber = $_POST['phonenumber'];
                                                $email = $_POST['email'];
                                                $Password = $_POST['password'];
                                                mysqli_query("update tbl_login set name='$name',housename='$housename',address='$address',pincode='$pincode',phonenumber='$phonenumber',email='$email',password='$password' where Username='$currentuser'");
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
<script src="assets/js/demo.js"></script>

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
