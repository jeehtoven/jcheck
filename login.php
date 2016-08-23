<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>jcheck</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap-3.3.7-dist/custom/styles.css" rel="stylesheet">
  </head>
  <body>
	<?php
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		//SQL Database connection
		
		$conn = new PDO( "sqlsrv:server=localhost;database=jCheck", "jcheck", "jcheck123" );
		$sql_pass = "SELECT hashpassword FROM jCheck_central where email = '" . $email . "'";
		
		$hash = $conn->query( $sql_pass )->fetch();
		$conn = null;
		
		if (password_verify($password, $hash[0])) {
			header('HTTP/1.1 303 See Other');
			header('location: http://localhost:999/application/welcome.php');
		// password is correct
		}
		else {
			echo "<center>Incorrect Password. Press back and try again.</center>";
		// password is wrong
		}
	?>
  </body>
  </html>