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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<?php
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$handle = $_POST['handle'];
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		
		//generate salt
		//$size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
		//$salt = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
		
		//echo $iv . "<br><br>";
		
		//generate hash password with salt
		
		//$hash = crypt($pwd, $salt);
		//$options = ['salt' => $salt];
		$hash = password_hash($pwd, PASSWORD_DEFAULT);
		
		//dates
		
		$created = date('d-m-y H:m:s');
		$updated = date('d-m-y H:m:s');
		$handle_status = "A";
		
	
		$conn = new PDO( "sqlsrv:server=localhost;database=jCheck", "jcheck", "jcheck123" );
		//$sql = "INSERT INTO jCheck_central ( firstname, lastname, handle, email, hashpassword, salt, created, updated, handle_status ) VALUES (getdate(), :title, :summary, :content )";
		//$sql = "INSERT INTO jCheck_central ( firstname, lastname, handle, email, hashpassword, salt, created, updated, handle_status ) VALUES ( :firstname, :lastname, :handle, :email, :hash, :salt, :created, :updated, :handle_status )";
		$sql = "INSERT INTO jCheck_central ( firstname, lastname, handle, email, hashpassword, created, updated, handle_status ) VALUES ( :firstname, :lastname, :handle, :email, :hash, :created, :updated, :handle_status )";
		//$sql = "SELECT * FROM jCheck_central";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":firstname", $firstname, PDO::PARAM_STR );
		$st->bindValue( ":lastname", $lastname, PDO::PARAM_STR );
		$st->bindValue( ":handle", $handle, PDO::PARAM_STR );
		$st->bindValue( ":email", $email, PDO::PARAM_STR );
		$st->bindValue( ":hash", $hash, PDO::PARAM_STR );
		//$st->bindValue( ":salt", $salt, PDO::PARAM_STR );
		$st->bindValue( ":created", $created, PDO::PARAM_STR );
		$st->bindValue( ":updated", $updated, PDO::PARAM_STR );
		$st->bindValue( ":handle_status", $handle_status, PDO::PARAM_STR );
		$st->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_SYSTEM);
	
		if (!$st->execute())
		{
			echo "Execute failed: (" . $st->errorCode() . ") " . "<br>"; 
			echo "<br>";
			print_r($st->errorInfo());
			//echo "<center>Hash: " . $hash . "</center>";
		}
	
		//$st->execute();
		$row = $st->fetch();
		$conn = null;
		if ( $row ) echo "<center>Row: $row</center>";
		else echo "<center>User added successfully.</center>";
	?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>