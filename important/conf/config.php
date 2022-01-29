<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) 
$servername = "localhost";
$username   = "root";
$password   = "";
$db_name    = "administration_managment";

 Attempt to connect to MySQL database 
$con  = mysqli_connect($servername, $username, $password, $db_name);
print_r( $con );
if ( !$con ) {
	// If there is an error with the connection, stop the script and display the error.
	echo "connectio failed";
}
*/
	$dsn    = 'mysql:host=localhost;dbname=administration_managment';
	$user   = 'root';
	$pass   = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
	);

	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'failed to connect' . $e->getMessage();
	}
