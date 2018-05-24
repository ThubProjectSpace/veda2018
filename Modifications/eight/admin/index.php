<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>


<style>
    html{
        background:    url(images/veda.gif) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    /*::-webkit-input-placeholder { /* Chrome */
  /*color: red;
}
:-ms-input-placeholder { /* IE 10+ */
  /*color: red;
}
::-moz-placeholder { /* Firefox 19+ */
  /*color: red;
  opacity: 1;
}
:-moz-placeholder { /* Firefox 4 - 18 */
  /*color: red;
  opacity: 1;
}*/



    .login h2{
        color: #fff;
    }

    .login input[type="text"],[type="password"]{
        padding: 6px 18px;
        border: 1px dashed #154659;
        border-radius: 6px;
        font-size: 18px;
        font-weight: normal;
    }
    .btn{
        color: #fff;
        background-color: #154659;
    }
    .btn:hover,.btn:focus{
        color: #fff;
    }
</style>


<body>

<div class="container">

    <div class="form login" style="position: relative; position: fixed; bottom: 30px;  left: 0; right: 0;">
        <center>
            <h2><i class="fa fa-sign-in"></i> Login</h2>
            <form method="post">
                <table class="">
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <input type="text" name="username" placeholder="Username" required autocomplete="off" autofocus /><br/><br/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="password" name="password" placeholder="Password" required /><br/><br/>
                            </div><br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input name="submit" type="submit"  class="btn btn-lg"  value="Login"/>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </div>

</div>

</body>
 <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
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
</html>


<?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
        
        $username = mysqli_real_escape_string($con,$_POST['username']); //escapes special characters in a string
        $password = mysqli_real_escape_string($con,$_POST['password']);
        
        //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='".$username."' and password='".md5($password)."'";
        //echo $query;
        $result = mysqli_query($con,$query);
        $rows = mysqli_num_rows($result);
        if($rows>0){
            $_SESSION['username'] = $username;
            if ($_SESSION['username']=='thub') {
                echo "<script>location.href='admin-dashboard.php';</script>"; // Redirect user to dashboard.php    
            }
            else {
                echo "<script>location.href='dashboard.php';</script>"; // Redirect user to dashboard.php
            }
        }
        else{
           echo "<script>alert('You are Entered Details was wrong....!'); location.href='index.php'; </script>"; // Redirect user to index.php
        }
    }

?>
