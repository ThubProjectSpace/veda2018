<?php
	include("config.php");


	// student data load
	if ($_REQUEST['action'] && $_REQUEST['action']=="data") {

		$pin = mysqli_real_escape_string($con, $_REQUEST['pin']);


		// from students table
		$query = "select * from students where `student_code`='".$pin."' ";
		$result = mysqli_query($con, $query);
		$fetch = mysqli_fetch_array($result);
		$rows = mysqli_num_rows($result);

		if ($rows>0) {
			//$student_name = str_replace("\n", " ", $fetch['student_name']);

			if ($fetch['year']==2017) {
				$present_year = "1st Year";
			}
			else if ($fetch['year']==2016) {
				$present_year = "2nd Year";
			}
			else if ($fetch['year']==2015) {
				$present_year = "3rd Year";
			}
			else if ($fetch['year']==2014) {
				$present_year = "4th Year";	
			}
			else{
				$present_year = $fetch['year'];
			}

			echo "<script>
				document.getElementById('name').focus();
				document.getElementById('name').value='".$fetch['student_name']."';

				document.getElementById('college').focus();
				document.getElementById('college').value='".$fetch['college']."';

				document.getElementById('dept').focus();
				document.getElementById('dept').value='".$fetch['section']."';

				document.getElementById('year').focus();
				document.getElementById('year').value='".$present_year."';

				document.getElementById('gender').value='".$fetch['gender']."';
			</script>";	
		}
		else{
			// from students table
			$query = "select * from `event_register` where `regroll`='".$pin."' ";
			$result = mysqli_query($con, $query);
			$fetch = mysqli_fetch_array($result);
			$rows = mysqli_num_rows($result);

				if ($rows>0) {
					//$student_name = str_replace("\n", " ", $fetch['student_name']);

					echo "<script>
						document.getElementById('name').focus();
						document.getElementById('name').value='".$fetch['regname']."';

						document.getElementById('college').focus();
						document.getElementById('college').value='".$fetch['regclg']."';

						document.getElementById('dept').focus();
						document.getElementById('dept').value='".$fetch['regdept']."';

						document.getElementById('year').focus();
						document.getElementById('year').value='".$fetch['regyear']."';

						document.getElementById('gender').value='".$fetch['gender']."';
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
						document.getElementById('year').value='';

						document.getElementById('gender').value='';
					</script>";
				}
		}
	}

	// Event fetching
	if ($_REQUEST['action'] && $_REQUEST['action']=="event") {

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