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

    <title>Event Co-ordinator</title>

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
                    <a class="navbar-brand" href="#">Spot Registered Students</a>
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

      
                <?php
                $user=$_SESSION['username'];
                ?>
        <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Students List</h4>
                                        <!--<p class="category">Here is a subtitle for this table</p>-->
                                         <a href="addco.php"> <button type="submit" class="btn btn-info btn-fill btn-wd pull-right">+ ADD</button></a>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped" id="datatable" style="background-color: #fff;">
                                            <thead align="center">
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Receipt Id.</th>
                                                    <th>Roll No.</th>
                                                    <th>Student Name</th>
                                                    <th>Department</th>
                                                    <th>College</th>
                                                    <!--<th>Year</th>-->
                                                    <th>Location</th>
                                                    <th>Mobile Number</th>
                                                    <th>Email</th>
                                                    <!--<th>Accomodation</th>-->
                                                    <th>Event Category</th>
                                                    <th>Event Name</th>
                                                    <th>Participation</th>
                                                    <th>Team Size</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                    $sel_query="Select * from `spot_registration` ORDER BY id desc;";
                                                    $result1 = mysqli_query($con,$sel_query);

                                                while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                                <tr>
                                                    <td><?php echo $count; ?></td>
                                                    <td><?php echo $row1["receipt_id"]; ?></td>
                                                    <td><?php echo $row1["student_code"]; ?></td>
                                                    <td><?php echo $row1["student_name"]; ?></td>
                                                    <td><?php echo $row1["section"]; ?></td>
                                                    <td><?php echo $row1["college"]; ?></td>
                                                    <td><?php echo $row1["location"]; ?></td>
                                                    <td><?php echo $row1["mobile"]; ?></td>
                                                    <td><?php echo $row1["email"]; ?></td>
                                                    <td><?php echo $row1["event_dept"]; ?></td>
                                                    <td><?php echo $row1["event_name"]; ?></td>
                                                    <td><?php echo $row1["participation"]; ?></td>
                                                    <td><?php echo $row1["participation_size"]; ?></td>
                                                    <td><?php echo $row1["fee"]; ?></td>
                                                    <td><a href="print/?print.php=<?php echo base64_encode($row1['id']); ?>" target="new"><label class="label label-danger" data-toggle="tooltip" title="print" data-placement="right" style="cursor: pointer;"><i class="fa fa-print fw" style="color: #fff;"></i></label></a></td>
                                                </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                        </table>
</div>

                </table>

              
                </div>

</div>
               </div></div>

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
    if (@$_GET['msg']) {
        if ($_GET['msg']==1) {
            ?>
                <script>
                        $.notify({
                            icon: 'fa fa-pencil',
                            message: "Event Co-ordinator Added Successfully....!"

                        },{
                            type: 'success',
                            timer: 4000
                        });
                </script>

            <?php
        }
        else  if ($_GET['msg']==2) {
            ?>
                <script>
                        $.notify({
                            icon: 'fa fa-trash',
                            message: "Event Co-ordinator Deleted Successfully....!"

                        },{
                            type: 'success',
                            timer: 4000
                        });
                </script>

            <?php
        }
        else if ($_GET['msg']==3) {
            ?>
                <script>
                        $.notify({
                            icon: 'fa fa-edit',
                            message: "Event Co-ordinator Updated Successfully....!"

                        },{
                            type: 'success',
                            timer: 4000
                        });
                </script>

            <?php
        }
    }
?>
<?php
}
else {
    echo "<script>location.href='dashboard.php'; </script>";
}
?>