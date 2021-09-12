<?php 
    session_start();
	include "database.php";
	$id = $_GET['id'];

	$deletequery = "delete from dash where id=$id";

	$query = mysqli_query($con, $deletequery);
	if($query){	

		$_SESSION['delete']="Product deleted successfully";
		header('location:dashboard.php');
	}
	else{
		echo '<script type="text/javascript">';
		echo ' alert("Cannot delete")';  
		echo '</script>';
  
	}