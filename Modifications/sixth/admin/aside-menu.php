<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    Veda 2017
                </a>
            </div>

            <ul class="nav">
                <?php
                if ($_SESSION['username']=='thub') {
                    ?>
                <li>
                    <a href="admin-dashboard.php">
                        <i class="ti-user"></i>
                        <p>Admin Dashboard</p>
                    </a>
                </li>
                    <?php
                } ?>

                <li>
                    <a href="dashboard.php">
                        <i class="ti-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="about-dept.php">
                        <i class="ti-bell"></i>
                        <p>About Department</p>
                    </a>
                </li>
                <li>
                    <a href="ordinators.php">
                        <i class="ti-user"></i>
                        <p> Dept. Co-Ordinator </p>
                    </a>
                </li>
                <li>
                    <a href="events.php">
                        <i class="ti-view-list-alt"></i>
                        <p> Events </p>
                    </a>
                </li>
                <li>
                    <a href="coordinator.php">
                        <i class="ti-user"></i>
                        <p>Event Co-Ordinators</p>
                    </a>
                </li>
                <li>
                    <a href="student-registration.php">
                        <i class="ti-clipboard"></i>
                        <p>Student Registrations</p>
                    </a>
                </li>
                <li>
                    <a href="spot-registration.php">
                        <i class="ti-clipboard"></i>
                        <p>Spot Registration</p>
                    </a>
                </li>
                <li>
                    <a href="change-pwd.php">
                        <i class="ti-settings"></i>
                        <p>Change Password</p>
                    </a>
                </li>
               
               
				<li class="active-pro">
                    <a href="logout.php">
                        <i class="ti-export"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>