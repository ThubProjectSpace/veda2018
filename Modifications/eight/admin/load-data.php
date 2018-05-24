<?php
	include("db.php");
	session_start();


	// student data load
	if ($_REQUEST['action'] && $_REQUEST['action']=="data") {

		$pin = mysqli_real_escape_string($con, $_REQUEST['pin']);

		// from events register table
		$query = "select * from `event_register` where `regroll`='".$pin."' and status='0' ";
		$result = mysqli_query($con, $query);
		$fetch = mysqli_fetch_array($result);
		$rows = mysqli_num_rows($result);

		if ($rows>0) {
			//$student_name = str_replace("\n", " ", $fetch['student_name']);

			echo "<script>
				//document.getElementById('name').focus();
				document.getElementById('name').value='".$fetch['regname']."';

				//document.getElementById('college').focus();
				document.getElementById('college').value='".$fetch['regclg']."';

				//document.getElementById('dept').focus();
				document.getElementById('dept').value='".$fetch['regdept']."';

				//document.getElementById('year').focus();
				//document.getElementById('year').value='".$fetch['regyear']."';

				//document.getElementById('mobile').focus();
				document.getElementById('mobile').value='".$fetch['regph']."';

				//document.getElementById('email').focus();
				document.getElementById('email').value='".$fetch['regmail']."';
			</script>";

			$same_dept_result = mysqli_query($con, "select * from `event_register` where `regroll`='".$pin."' and status='0' and regcategory='".$_SESSION['username']."' ");
			if (mysqli_num_rows($same_dept_result)>0) {
				$_SESSION['event'] = $fetch['regevent'];			
				echo "<script>
	    			$('#event_category').val('".$fetch['regcategory']."');
	    			$('#event_category').focus();
	    			//$('#events').val('".$fetch['regevent']."');
				</script>";

				$result = mysqli_query($con, "select * from event where submittedby='".$fetch['regcategory']."' and event_name='".$fetch['regevent']."' ");
				$location_fetch = mysqli_fetch_array($result);

				if ($location_fetch['event_location']!="") {
					echo "<script>
						document.getElementById('location').value='".$location_fetch['event_location']."';
					</script>";				
				}
			}

		}
		else {
			// from students table
			$query = "select * from students where `student_code`='".$pin."' ";
			$result = mysqli_query($con, $query);
			$fetch = mysqli_fetch_array($result);
			$rows = mysqli_num_rows($result);

			if ($rows>0) {
				echo "<script>
					//document.getElementById('name').focus();
					document.getElementById('name').value='".$fetch['student_name']."';

					//document.getElementById('college').focus();
					document.getElementById('college').value='".$fetch['college']."';

					//document.getElementById('dept').focus();
					document.getElementById('dept').value='".$fetch['section']."';

					//document.getElementById('year').focus();
					//document.getElementById('year').value='".$fetch['academic_year']."';

					//document.getElementById('mobile').focus();
					document.getElementById('mobile').value='".$fetch['mobile']."';

					//document.getElementById('email').focus();
					document.getElementById('email').value='".$fetch['email']."';
				</script>";
			}
			else {
				$_SESSION['event'] = "";

				echo "<script>
					//document.getElementById('name').focus();
					document.getElementById('name').value='';

					//document.getElementById('college').focus();
					document.getElementById('college').value='';

					//document.getElementById('dept').focus();
					document.getElementById('dept').value='';

					//document.getElementById('year').focus();
					//document.getElementById('year').value='';

					//document.getElementById('mobile').focus();
					document.getElementById('mobile').value='';

					//document.getElementById('email').focus();
					document.getElementById('email').value='';

					$('#event_category').val('');
	    			//$('#event_category').focus();
	    			$('#events').val('');

	    			document.getElementById('location').value='';

				</script>";
			}
		}
	}

	// Event fetching
	if ($_REQUEST['action'] && $_REQUEST['action']=="events") {

		$dept = $_REQUEST['dept'];
		$query = "select * from event where `submittedby`='".$dept."' ";
		$result = mysqli_query($con, $query);
		$rows = mysqli_num_rows($result);

			echo "<select>
			<option value=''>Select Events</option>";

		if ($rows>0) {
			while ($fetch = mysqli_fetch_array($result)) {
				if ($_SESSION['event']==$fetch['event_name']) {
					$optinon_select = "selected";
				}
				else {
					$optinon_select = "";	
				}
				?>
					<option value="<?php echo $fetch['event_name']; ?>" <?php echo $optinon_select; ?> ><?php echo $fetch['event_name']; ?></option>
				<?php
			}

		}
		else {
			?>
				<option value="">No events found.</option>
			<?php
		}

			echo "</select>";
	}


	// Event location
	if ($_REQUEST['action'] && $_REQUEST['action']=="location") {
		$dept = $_REQUEST['dept'];
		$event = $_REQUEST['event'];

		$loc_result = mysqli_query($con, "select * from event where submittedby='".$dept."' and event_name='".$event."'  ");
		if (mysqli_num_rows($loc_result)>0) {
			$loc_fetch = mysqli_fetch_array($loc_result);
			if ($loc_fetch['event_location']!="") {
				echo "<script>
					document.getElementById('location').value='".$loc_fetch['event_location']."';
				</script>";
			}
		}


	}
?>