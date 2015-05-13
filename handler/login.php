<?php
include('../include/config.php');

if(!empty($_POST['email'])&&!empty($_POST['password'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	$query = $dbConnect->prepare("SELECT * FROM user WHERE email = ? and password = ?");
	$query->bindValue(1,$email);
	$query->bindValue(2,$password);
	$query->execute();
	$result = $query->fetch();
	
	if(!empty($result)){
		session_start();
		$_SESSION['id'] = $result['id'];
		$_SESSION['name'] = $result['name'];
		
		header("Location: ../index.php ");
	}
	else{
		//header("Location: ../index.php ");
	}
}
else{
	header("Location: ../index.php ");
	
}
?>