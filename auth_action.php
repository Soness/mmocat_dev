<?php
	session_start();
	require "connection.php";
	
	

	if (isset($_SESSION['loggedIN']))
	{
		exit('U ALREADY LOGGED');
	}
	else
	{
		if (isset($_POST['login']))
		{
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			$sql = "SELECT id FROM users WHERE email='$email' AND password='$password'";
			$data = $conn->query($sql);

			if ($data->num_rows > 0)
			{
				$_SESSION['loggedIN'] = '1';
				$_SESSION['email'] = $email;
				header('Location : index.php');
				exit('success');
			}
			else
			{
				exit('failed');
			}

		}
	}


	
	
	
	
?>