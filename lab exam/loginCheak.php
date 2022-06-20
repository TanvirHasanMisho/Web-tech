<?php 
	session_start();

	if(isset($_POST['submit'])){

		$userid 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($userid != ""){
			if($password != ""){
				
				
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($userid == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: home.php');
					}
				}

				echo "invalid username/password";

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>