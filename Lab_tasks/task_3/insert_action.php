<?php
session_start();
require_once("con_db.php");
///////////////////
//  Problem 01  //
/////////////////
if (isset($_POST['btnInfo']) == "Insert") {
	$ID = $_POST['ID'];	
	$name = $_POST['name'];
	$program = $_POST['program'];	
	$intake = $_POST['intake'];	
	$blood = $_POST['blood'];
	$barcode = substr(md5($ID),0,11);
	$valid = date_format(date_create($_POST['validity']),"Y-m-d");

	/*Insert into tbl_info*/
	$insertData1 = "'$ID','$name','$program','$intake','$blood','$barcode','$valid'";

	$insertSQL1 = "INSERT INTO tbl_info VALUES($insertData1)";

	$insertQuery1 = @mysqli_query($dbCon,$insertSQL1) or die("Error in Table Info Insertion: ".mysqli_error($dbCon));

	/*Insert into tbl_user*/

	$insertData2 = "'$ID','".rand(1111,9999)."','0'";

	$insertSQL2 = "INSERT INTO tbl_user VALUES($insertData2)";
	
	$insertQuery2 = @mysqli_query($dbCon,$insertSQL2) or die("Error in Table User Insertion: ".mysqli_error($dbCon));

	/*Success or Error Message*/

	if($insertQuery1 && $insertQuery2){
		$_SESSION['msg'] = "<h4 style='color:blue'>Data Succefully Inserted</h4>";
	}else{
		$_SESSION['msg'] = "<h4 style='color:red'>Not Inserted</h4>";
	}
	header('Location:' . BASE);
}

?>