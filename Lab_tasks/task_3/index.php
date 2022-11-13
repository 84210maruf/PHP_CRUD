<?php session_start(); ?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="author" content="Md. Masudul Islam Ibrahim">
    <title>CSE 458-Lab:09</title>
</head>
<body>
	
	<!-- Problem + Solution: 001 [START]-->

	<h3>
		<span style="color: green;"> Problem 1: Write a PHP-MySQL program to Insert Some data into a Database Table</span>
	<hr>
	<h3><span style="color: red;">Solution</span></h3>


	<!--Procedure: Try to write the PHP code. -->
		<div>
			<span style="text-align: center"><h3>Insert into Information & User Table</h3>
			<?php 
				if(@$_SESSION['msg']!=""){
					echo $_SESSION['msg']; 
					echo $_SESSION['msg']="";
				}
			?>
			</span>
			
			<form action="insert_action.php" method="post" enctype="multipart">
				<table align="center">
					<tr>
						<td> 
							<label>ID:: </label>
							<input type="text" name="ID" />
						</td>
						<td>
							<label>| NAME:: </label>
							<input type="text" name="name" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>PROGRAM:: </label>
							<input type="radio" name="program" value="CSE" /> CSE | 
							<input type="radio" name="program" value="EEE" /> EEE |
							<input type="radio" name="program" value="Textile" /> Textile
						</td>
						<td>
							<label> | INTAKE:: </label>
							<input type="number" name="intake" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>BLOOD:: </label>
							<select name="blood">
								<option value="-99">Select Blood Group</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
							</select>
						</td>
						<td>
							<label>| VALIDITY: </label>
							<input type="date" name="validity" />
						</td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" name="btnInfo" value="Insert" /></th>
					</tr>
				</table>
			</form>
		</div>
	<!-- Problem + Solution: 001 [END]-->
	<hr>
	<h3>
		<span style="color: blue;"> Task 2: Write a PHP-MySQL program insert data of following form. Follow these steps:
			<ul>
				<li>Create a database name: "db_crud"</li>
				<li>Create a table name: tbl_insert</li>
				<li>Add fields according to given FORM's fields and HIDDEN input</li>
				<li>Write PHP-MySQL code to insert data</li>
			</ul>
		</span>
		<h3><span>Sample Output:</span></h3>
	<h3>
		<form action="inser_action2.php" method="post" enctype="multipart">
				<table align="center">
					<tr>
						<td>
							<label>FULL NAME:: </label>
							<input type="text" name="fullname" />
						</td>
					</tr>
					<tr>
						<td >
							<label>ADDRESS:: </label>
							<input type="text" name="address" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>GENDER:: </label>
							<input type="radio" name="gender" value="Male" /> MALE
							<input type="radio" name="gender" value="Female" /> FEMALE
						</td>
					</tr>
					<tr>
						<td> 
							<label>AGE Status:: </label>
							<select name="age_status">
								<option value="-99">Select age status</option>
								<option value="teen_age">15-18</option>
								<option value="middle_age">18-30</option>
								<option value="old_age">30-60</option>
							</select>
						</td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" name="btnInfo" value="Inserting" /></th>
					</tr>
				</table>
			</form>
</body>
</html>