<html>
<h1> Connect to DATABASE </h1>
<?php

$serverName = 'localhost';
$dbuser = 'david';
$pass = 'chasko99';
$dbName = 'webDB';
$errName = 'kkk';

try {
	 //1. PDO style  :  $con_pdo
	$con_pdo = new  PDO("mysql:host={$serverName}", $dbuser, $pass ) ;

	$con_pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$con_pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
	$con_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//2. mysqli Object Oriented style   :   $con
	$con =  new mysqli($serverName, $dbuser, $pass);
 		if($con->connect_errno) {
			echo "Fail to connect MySQLi OOP: ".$con -> connect_error;
			//exit();
 		}

	//3. mysqli procedural style    :   $db 
	$db = mysqli_connect($serverName, $dbuser, $pass );
 		if(mysqli_connect_errno()) {
			echo "Fail to connect MySQLi: ".mysqli_connect_error();
			//exit();
 		}
 
	echo "Successfuly Connected." ;

} catch (PDOException $e) {
	echo "Fail : ";
	echo $e->getMessage();
}	

?>

</html>

