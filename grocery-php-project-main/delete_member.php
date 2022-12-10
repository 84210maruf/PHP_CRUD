<?php
	include("connect.php");
	$id = $_GET['id'];
	$q = "delete from about where id = $id ";
	mysqli_query($con,$q);
	header("location:about.php");
    
	
	
?>