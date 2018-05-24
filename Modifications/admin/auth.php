
<?php 
session_start();

if(!isset($_SESSION['username']))
{
	echo "<script>location.href='index.php'</script>";
}

    if ($_SESSION['username']!="" && $_SESSION['hostel_login']=="true" ) {
        echo "<script>
            location.href='hostel_dashboard.php';
        </script>";
    }


?>
