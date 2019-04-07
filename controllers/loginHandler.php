<?php
if (isset($_POST['login_user'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
            array_push($errors, "Username is required");
    }
    if (empty($password)) {
            array_push($errors, "Password is required");
    }

	if (count($errors) == 0) {
		// $password = md5($password);
		$query = "SELECT * FROM users_list WHERE user_name='$username' AND user_password='$password'";
		$results = mysqli_query($conn, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['user_name'] = $username;
			$row = mysqli_fetch_row($results);
			if($row[4] == 'superadmin') {
				$_SESSION['user_type'] = 'superadmin'; 
				header('Location: dashboards/superadmin/');
			}
			else if($row[4] == 'admin') {
				$_SESSION['user_type'] = 'admin'; 
				header('Location: dashboards/admin/');
			}
			else {
				$_SESSION['user_type'] = 'manager';
				header('Location: dashboards/manager/');
			}
		}
		else {
			array_push($errors, "Please Enter Valid Username or Password");
		}
	}
}
?>	