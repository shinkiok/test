<?php
include 'con.php';

//  쿼리를 담은 PDOStatement 객체생성  
$stmt = $con_pdo->prepare("SELECT * FROM webDB.member ");

// PDOStatement 객체가 가진 쿼리의 파라메터에 변수 값을 바인
// $stmt->bindValue(":name", "나연");

// PDOStatement 객체가 가진 쿼리를 실행
$stmt->execute();

// PDOStatement 객체가 실행한 쿼리의 결과값 가져오기
//$row = $stmt->fetch();
$row = $stmt->fetchAll();

echo "<pre>";
print_r($row);
echo "</pre>";

$con_pdo = null;
?>

			
