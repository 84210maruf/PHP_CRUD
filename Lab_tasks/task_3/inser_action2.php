
<?php
session_start();
require_once("con_db.php");

///////////////////
//  Problem 02  //
/////////////////

if(isset($_POST['btnInfo'])=='Inserting'){
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$age_status = $_POST['age_status'];
    echo $fullname;

	$insertData = "'$fullname','$address','$gender','$age_status'";
	//$insertData = "'fullname','address','gender','age_status'";

	$insertSQL = "INSERT INTO tbl_insert(fullname, address, gender, age_status) VALUES($insertData)";
	$insertQuery = @mysqli_query($dbCon,$insertSQL) or die("Error in Table Info Insertion: ".mysqli_error($dbCon));
    
	header('Location:index.php');
}

?>
<h3>maruf</h3>