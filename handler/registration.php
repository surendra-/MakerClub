<?php
include('../include/config.php');

if(!empty($_POST['email'])&&!empty($_POST['password1'])){
	
	echo "signing in..";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password1'];
	$newsletter = isset($_POST['newsletter'])?$_POST['newsletter']:'0';
	$joinDate =  date("Y-m-d");
	
	$query = $dbConnect->prepare("INSERT INTO user (name,email,password,newsletter,join_date) VALUES (?,?,?,?,?)");
	$query->bindValue(1,$name);
	$query->bindValue(2,$email);
	$query->bindValue(3,$password);
	$query->bindValue(4,$newsletter);
	$query->bindValue(5,$joinDate);
	
	$result = $query->execute();
			
			if ($result) 
			{
				$lastId = $dbConnect->lastInsertId();
				session_start();
				$_SESSION['id'] = $lastId;
				$_SESSION['name'] = $name;
				header("Location: ../index.php ");
			}
			else{
				
			}
	
}
else{
	echo "Parameter Missing : ".$_POST['password1'];
}
?>