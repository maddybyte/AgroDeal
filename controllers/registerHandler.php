<?php
    if (isset($_POST['reg_user'])) {
	
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);

	
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if (empty($city)) { array_push($errors, "City name is required"); }
       
        if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");
            if (empty($mobile)) { array_push($errors, "Mobile Number is Required"); }
        }

        $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' OR mobile= '$mobile' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
	
    	if ($user) { 
	    	if ($user['username'] === $username) {
		    	array_push($errors, "Username already exists");
		    }

            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
		    if ($user['mobile'] === $mobile) {
                array_push($errors, "Mobile Number already exists");
            }
        }
        if (count($errors) == 0) {
            $password = md5($password_1);
    
            $query = "INSERT INTO user (username, email, password, mobile, address, city) 
                        VALUES('$username', '$email', '$password','$mobile','$address','$city')";
            mysqli_query($conn, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }
?>