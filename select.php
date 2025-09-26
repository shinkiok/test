<?php
include 'con.php';

$sql = "select * from webDB.member";
$res = mysqli_query($db, $sql);

if(mysqli_num_rows($res) > 0) {
	while($row = mysqli_fetch_assoc($res)) {
		echo "<br>id :".$row['id']." pass : ".$row['password'] ;
	}
}else {
		echo "0 result..";
}

$db->close();
?>

			
