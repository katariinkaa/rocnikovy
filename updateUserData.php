
<?php
include 'server.php';


$userid = $_SESSION['user_id'];
			$username = $_SESSION['user_name'];
			$email = $_SESSION['user_email'];
			$roles = $_SESSION['user_roles'];
			$tokens = $_SESSION['user_tokens'];


if (isset($_POST['update_data'])) {
	mysqli_query($connect,
		"UPDATE users 
		set user_id='" . $_POST['user_id'] . "', user_name='" . $_POST['user_name'] . "', user_email='" . $_POST['user_email'] . "' 
		WHERE user_id='" . $_SESSION['user_id'] . "'");
}
?>


 