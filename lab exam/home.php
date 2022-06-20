<?php 
	//session_start();
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome home!</h1>
	<a href="login.html">logout </a>
</body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>

