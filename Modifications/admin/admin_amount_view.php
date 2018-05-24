<?php
require('db.php');
    session_start();

    if (isset($_SESSION['username']) && $_SESSION['username']=='thub') {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin Dashboard</title>

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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <!--- Data Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css"/> 
    <!--<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jqc-1.12.4/dt-1.10.15/datatables.min.js"></script>-->

</head>
<body>

<div class="wrapper">

<?php include("aside_menu.php"); ?>

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
                    <a class="navbar-brand" href="#">Amount</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <!--  <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
                                    <p>Notifications</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li> -->
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    
                                    <p>Hello <b><?php echo $_SESSION['username']; ?></b> !</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="logout.php">Logout</a></li>
                                
                              </ul>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="col-md-12">

            <div class="row">


            <?php
                /* events query */

                $query = "select * from `users` ";
                $result = mysqli_query($con, $query);

                while ($fetch = mysqli_fetch_array($result)) { ?>
                    <div class="row">
                        <center><h3><strong><?php echo ucfirst($fetch['username']); ?></strong></h3></center>
	                        <div class="col-md-2" style="margin-left: 40%">
	                            <div class="col-md-4 r3_counter_box pull-left">
	                                <i class="fa fa-rupee fa-2x icon-rounded animated jello" ></i>
	                            </div>

	                            <div class="col-md-8 pull-right text-center">
	                                <h4>Total</h4>
										<?php $dpt_amount = mysqli_query($con, "select * from `spot_registration` where event_dept='".$fetch['username']."' ");
		                                    $dpt_amount_total = 0;
		                                    while ($Amount = mysqli_fetch_array($dpt_amount)) {
		                                        $dpt_amount_total = $dpt_amount_total+$Amount['fee'];
		                                    }
		                                ?>
	                                <h4><?php echo $dpt_amount_total; ?><i class="fa fa-rupee fw"></i></h4>
	                            </div>

	                            <div class="clearfix"></div>
	                        </div>
	                        <div class="clearfix"></div><br/>
                        <?php

                        $inner_query = "select * from `event` where `submittedby`='".$fetch['username']."' ";
                        $inner_result = mysqli_query($con, $inner_query);
                        $events_count = mysqli_num_rows($inner_result);

                        if ($events_count>0) {
                            while ($inner_fetch = mysqli_fetch_array($inner_result)) {

                                /* student registration query */
                                $stu_query = "select * from `event_register` where regcategory='".$fetch['username']."' and regevent='".$inner_fetch['event_name']."' ";
                                $stu_result = mysqli_query($con, $stu_query);
                                //$numrows = mysqli_num_rows($stu_result);

			                    $total_amount  = 0;
			                    $rs_query = mysqli_query($con, "select * from `spot_registration` where event_dept='".$fetch['username']."' and  event_name='".$inner_fetch['event_name']."' ");
			                    while ($rs_fetch = mysqli_fetch_array($rs_query)) {
			                        $total_amount = ($total_amount+$rs_fetch['fee']);
			                    }
                                ?>
                                    <div class="col-md-2">
                                        <div class="col-md-4 r3_counter_box pull-left">
                                            <i class="fa fa-users fa-2x icon-rounded animated jello" ></i>
                                        </div>

                                        <div class="col-md-8 pull-right text-center">
                                            <h4><?php if(strlen($inner_fetch['event_name'])<=18) { 
                                                        echo $inner_fetch['event_name']; 
                                                    }
                                                    else { 
                                                        echo substr($inner_fetch['event_name'], 0, 20)."...";
                                                    } ?></h4>
                                            <h3><?php echo $total_amount; ?><i class="fa fa-rupee fw" style="font-size: 16px;"></i></h3>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                <?php
                            }
                        }
                        else {
                            echo "<center><label>No Events found....!</label></center>";
                        } ?>
                    </div><br/><br/><hr style="border: 1px solid #000;" />
                    <?php
                }
            ?>
            </div><br/><br/>

            </div>

            <?php include("footer.php"); ?>
        </div>
    </div>


    


    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
	<script src="//cdn.datatables.net/buttons/1.4.0/js/buttons.flash.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
	<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
	<script src="//cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>
	<script src="//cdn.datatables.net/buttons/1.4.0/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>

</body>

</html>


<?php
}
else {
    echo "<script>location.href='dashboard.php'; </script>";
}
?>