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

    <title>Spot Registration</title>

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
    <!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">-->
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
                    <a class="navbar-brand" href="#">Spot Registrations</a>
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
                        
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Spot Registration</h4>
                            </div>
                            <div class="content">
                                <form name="form" method="post" action=""> 
                                <input type="hidden" name="new" value="1" />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Student Id / Roll No.</label>
                                                <input type="text" name="roll" id="roll"  class="form-control border-input" placeholder="Roll No." required="" autofocus oninput="loaddata();" onblur="loaddata();" />                                         
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Student Name</label>
                                                <input type="text" name="name" id="name"  class="form-control border-input" placeholder="Name" required="" />                                         
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>College</label>
                                                <input type="text" name="college" id="college"  class="form-control border-input" placeholder="College" required="" />                                         
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile Number</label>
                                                <input type="text" name="mobile" id="mobile"  maxlength="10" minlength="10" class="form-control border-input" placeholder="Mobile" required="" />                                         
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Id</label>
                                                <input type="email" name="email" id="email"  class="form-control border-input" placeholder="Email" required="" />                                         
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <input type="text" name="dept" id="dept"  class="form-control border-input" placeholder="Department" required="" />                                         
                                            </div>
                                        </div>

                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Event Category</label>
                                               <select name="event_category" id="event_category" class="form-control border-input" required>
                                                <option value="">Select Event Category</option>
                                                    <?php
                                                        $result = mysqli_query($con, "select * from `users` where username!='thub' and username='".$_SESSION['username']."' ");
                                                        while ($fetch = mysqli_fetch_array($result)) {
                                                            ?>
                                                                <option value="<?php echo $fetch['username']; ?>"><?php echo ucfirst($fetch['username']); ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                            </select>
                                            </div>
                                        </div>

                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Events</label>
                                               <select name="events" id="events" class="form-control border-input" required>
                                                <option value="">Select Events</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <select name="location" id="location"  class="form-control border-input" required="">
                                                	<option value="">Select Event Location</option>
                                                	<?php
                                                		$loc_result = mysqli_query($con, "select * from `event` where `submittedby`='".$_SESSION['username']."' and event_location!='' ");
                                                		if (mysqli_num_rows($loc_result)>0) {
	                                                		while ($loc_fetch = mysqli_fetch_array($loc_result)) {
	                                                			?>
	                                                				<option value="<?php echo $loc_fetch['event_location']; ?>"><?php echo $loc_fetch['event_location']; ?></option>
	                                                			<?php
	                                                		}
	                                                	}
	                                                	else {
	                                                		?>
	                                                				<option value="----">No Locations found</option>
	                                                		<?php
	                                                	}
                                                	?>
                                                </select>
                                            </div>
                                        </div><div class="clearfix"></div>

                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <input type="radio" name="team" value="Individual" required id="individual" />
                                                Individual
                                            </div> 

                                            <div class="col-md-6">
                                                <input type="radio" name="team" value="Team" required id="team_click" />
                                                Team
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Team Size</label>
                                                <input type="text" name="team_size" id="team_size"  class="form-control border-input" placeholder="Size of the Team" required="" disabled />                                         
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fee  /-</label>
                                                <input type="text" name="fee" id="fee"  class="form-control border-input" placeholder="fee" required="" />                                         
                                            </div>
                                        </div>

                                    </div> 
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="register_student">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>

<!--D126G9I3<br/>

1. registration in more than 1.<br/>
2. if the print is done then the row was update status  = 1 or not<br/>
3. any department the receipt was generated.<br/>-->
<!--4. while entering the data manually first enter the roll number and after all data.-->

                            </div>
                        </div>
                    </div>


                </div>

            <?php include("footer.php"); ?>
    </div>
</div>


<p id="ajax-load" style="display: none;"></p>

<a href="print/" id="new_tab_print" target="new" style="display: none;"></a>
    


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


        // phone number validation
        $("#mobile").keyup(function() {
            $("#mobile").val(this.value.match(/[0-9]*/));
        });

        // fee number validation
        $("#fee").keyup(function() {
            $("#fee").val(this.value.match(/[0-9]*/));
        });

        // teamsize number validation
        $("#team_size").keyup(function() {
            $("#team_size").val(this.value.match(/[0-9]*/));
        });

        
        //load data function
        function loaddata(){
            //load data
            $("#ajax-load").load('load-data.php?action=data&pin='+roll.value);
        }


        // team size textbox disable and enable
        $("#team_click").click(function(){
            $("#team_size").prop("disabled",false);
        });
        $("#individual").click(function(){
           $("#team_size").prop("disabled",true); 
       });


        $("#event_category").on({
            focus: function(){
                $("#events").load('load-data.php?action=events&dept='+event_category.value);
            },
            change: function(){
                $("#events").load('load-data.php?action=events&dept='+event_category.value);
            }
        });

        $("#events").change(function(){
        	$("#ajax-load").load('load-data.php?action=location&dept='+event_category.value+'&event='+events.value);
        });

    </script>

</body>

</html>

<?php
if (isset($_POST['register_student'])) {
    $roll = mysqli_real_escape_string($con, $_POST['roll']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $college = mysqli_real_escape_string($con, $_POST['college']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $dept = mysqli_real_escape_string($con, $_POST['dept']);
    $event_category = mysqli_real_escape_string($con, $_POST['event_category']);
    $event_name = mysqli_real_escape_string($con, $_POST['events']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $participation = mysqli_real_escape_string($con, $_POST['team']);
    $participation_size = mysqli_real_escape_string($con, $_POST['team_size']);
    $fee = mysqli_real_escape_string($con, $_POST['fee']);

    $query = "insert into spot_registration set student_code='".$roll."', student_name='".$name."', section='".$dept."', college='".$college."', location='".$location."', mobile='".$mobile."', email='".$email."', event_dept='".$event_category."', event_name='".$event_name."', participation='".$participation."', participation_size='".$participation_size."', fee='".$fee."' ";
    $result = mysqli_query($con, $query);

    if ($result) {
        $lastid = mysqli_insert_id($con);
        $_SESSION['id'] = $lastid;

         //**********************************************//
		//				Generating Receipt Id 			//
       //*********************************************//

	    // dept length
		$dept_length = strlen($_SESSION['username'])-1;

		// first Character
		$fchar =  ucfirst(substr($_SESSION['username'], 0, 1));
		// three digit random number
		$three_digit_rand = rand(100,999);

		// single digit rand for single char
		$single_digit_rand = rand(0,$dept_length);
		$schar = ucfirst($_SESSION['username'][$single_digit_rand]);

		// single digit rand number
		$single_digit_rand_no = rand(0,9);

		// single digit rand for single char
		$single_digit_rand = rand(0,$dept_length);
		$schar = ucfirst($_SESSION['username'][$single_digit_rand]);

		// total receipt id
		$receipt_id = $fchar.$three_digit_rand.$schar.$single_digit_rand_no.$schar.$lastid;

		$re_result = mysqli_query($con, "update spot_registration set receipt_id='".$receipt_id."' where id='".$lastid."' ");

		if ($re_result) {
		    echo "
		        <script>
		            alert('Receipt generated Successfully....');
		            //location.href='print/';
                    document.getElementById('new_tab_print').click();
		        </script>";
		}
    }
}
?>