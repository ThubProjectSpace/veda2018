<?php
	include("db.php");


	// student data load
	if ($_REQUEST['action'] && $_REQUEST['action']=="data") {

		$pin = mysqli_real_escape_string($con, $_REQUEST['pin']);

		// from events register table
		$query = "select * from `event_register` where `regroll`='".$pin."' ";
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

    			$('#event_category').val('".$fetch['regcategory']."');
    			$('#event_category').focus();
    			$('#events').val('".$fetch['regevent']."');


				//document.getElementById('event_category').focus();
				//document.getElementById('event_category').s='".$fetch['regevent']."';
			</script>";
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
					document.getElementById('college').value='".$fetch['college_name']."';

					//document.getElementById('dept').focus();
					document.getElementById('dept').value='".$fetch['department']."';

					//document.getElementById('year').focus();
					//document.getElementById('year').value='".$fetch['academic_year']."';

					//document.getElementById('mobile').focus();
					document.getElementById('mobile').value='".$fetch['mobile']."';

					//document.getElementById('email').focus();
					document.getElementById('email').value='".$fetch['email']."';
				</script>";
			}
			else {
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

					//document.getElementById('event_name').focus();
					//document.getElementById('event_name').value='';
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
				?>
					<option value="<?php echo $fetch['event_name']; ?>"><?php echo $fetch['event_name']; ?></option>
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
?>