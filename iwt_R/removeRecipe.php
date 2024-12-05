<?php

	include_once'connect.php';
	
	
	$id=$_GET['id'];
	$sql="DELETE FROM addrecipe WHERE recipe_id=$id";
	$result= mysqli_query($conn,$sql);
	
	if($result){
		header("location:recipes.php");
	}
	
?>