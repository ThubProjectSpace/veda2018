<?php
    require('db.php');
    include("auth.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

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

    <?php include("aside-menu.php"); ?>

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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-view-list-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>List of</p>
                                            Events
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-settings"></i> <a href="events.php">Manage Events</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Event</p>
                                            Co-Ordinators
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-settings"></i> <a href="coordinator.php">Event Co-Ordinators Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-bell"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>About</p>
                                            Department
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-settings"></i><a href="about-dept.php"> About Department</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Department</p>
                                            Co-Ordinator
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-settings"></i><a href="ordinators.php"> Dept. CO-Ordinator</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       

                <?php
                $user=$_SESSION['username'];
                ?>
        <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">List of Events</h4>
                                        <!--<p class="category">Here is a subtitle for this table</p>-->
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped" id="datatable1">
               
                <thead>

                <th>ID</th>
                                        <th>Event Name</th>
                                        <th>Overview</th>
                                        <th>Rules</th>
                                        <th>Registration</th>
                                        <th>Event Location</th>
                                        <th>Other Conditions</th>
                                        <?php
                                        if ($user=='thub') { ?>
                                            <th>Added By</th>
                                        <?php }
                                        ?>
                                        <th>Edit</th>
                                         <th>Delete</th>
                </thead>
                <tbody>
                <?php
                $count=1;
                if ($_SESSION['username']=='thub') {
                    $sel_query="Select * from event ORDER BY id desc";
                }
                else {
                    $sel_query="Select * from event where submittedby='$user' ORDER BY id desc";
                }
                $result = mysqli_query($con,$sel_query);
                while($row = mysqli_fetch_assoc($result)) { ?>
                <tr><td align="center" ><?php echo $count; ?></td><td ><?php echo $row["event_name"]; ?></td><td ><?php echo $row["event_overview"]; ?></td><td ><?php echo $row["event_rules"]; ?></td><td><?php echo $row["event_registration"]; ?></td><td><?php echo $row["event_location"]; ?></td><td ><?php echo $row["other_conditions"]; ?></td>

                <?php
                if ($user=='thub') { ?>
                    <td><?php echo $row["submittedby"]; ?></td>
                <?php }
                ?>

                <td ><a href="edit.php?id=<?php echo $row["id"]; ?>"><img src="icons/edit.png" title="Edit" width="16" height="16"></a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>"><img src="icons/trash.png" title="Delete" width="25" height="25"></a></td></tr>
                <?php $count++; } ?>
                </tbody>
                </table>

                <br /><br /><br /><br />
                </div>

 </div>     
 </div>         

<!-- Co-Ordinators  -->
 <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Event Co-Ordinators</h4>
                                        <!--<p class="category">Here is a subtitle for this table</p>-->
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped" id="datatable2">
               
                <thead align="center">

                <th>ID</th>

                                        <th>Co-ordinator Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Event Name</th>
                                        <th>Co-Ordinator type</th>
                                        <?php
                                        if ($user=='thub') { ?>
                                            <th>Added By</th>
                                        <?php }
                                        ?>
                                        <th>Edit</th>
                                         <th>Delete</th>
                </thead>
               <tbody>
<?php
$count=1;
if ($_SESSION['username']=='thub') {
    $sel_query="Select * from co ORDER BY id desc";    
}
else {
    $sel_query="Select * from co where submittedby='$user' ORDER BY id desc";
}

$result1 = mysqli_query($con,$sel_query);
while($row1 = mysqli_fetch_assoc($result1)) { ?>
<tr><td><?php echo $count; ?></td><td><?php echo $row1["cname"]; ?></td><td><?php echo $row1["cno"]; ?></td> <td><?php echo $row1["cemail"]; ?></td><td><?php echo $row1["event_name"]; ?></td><td><?php echo $row1["co_type"]; ?></td>

    <?php
    if ($user=='thub') { ?>
        <td><?php echo $row1["submittedby"]; ?></td>
    <?php }
    ?>

<td><a href="edit_co.php?id=<?php echo $row1["id"]; ?>"><img src="icons/edit.png" title="Edit" width="16" height="16"></a></td><td><a href="delete_co.php?id=<?php echo $row1["id"]; ?>"><img src="icons/trash.png" title="Delete" width="25" height="25"></a></td></tr>
<?php $count++; } ?>
</tbody>
                </table>

              
                </div>

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
            $('#datatable1').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );

            $('#datatable2').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>


</body>
</html>
