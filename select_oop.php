<?php
include 'con.php';

$sql = "select * from webDB.member";
$res = $con-> query($sql);

if($res->num_rows > 0) {
	while($row = $res->fetch_assoc()) {
		echo "<br>id :".$row['id']." pass : ".$row['password'] ;
	}
}else {
		echo "0 result..";
}

$con->close();
?>

			
