<?php
	require_once('C:\\inetpub\\simplesamlphp\\lib\\_autoload.php');
	$as = new SimpleSAML_Auth_Simple('default-sp');
	$as->login(array(
    'saml:idp' => 'http://localhost/456',
));

	
?>
</body>
</html>