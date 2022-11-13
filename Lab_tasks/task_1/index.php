<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="author" content="Md. Masudul Islam Ibrahim">
    <title>CSE 458-Lab:07</title>
</head>
<body>
	<h1>Introduction to PHP, Variables, Loops, Conditions, Arrays.</h1>
	<em>The goal of this week’s lab is to introduce the students with the aPHP and perform different types of operation. </em>
	<hr>
	<!-- Problem + Solution: 001 [START]-->
	<h3>
		<span style="color: green;"> Problem 1: Write a program to create a simple database & a table, design a HTML form, and write PHP code to calculate values from HTML FORM. 
		</span>
	<h3>
	<h3><span>Sample Output:</span></h3>
	<img src="Picture1.png" alt="sample One" />
	<hr>
	<h3><span style="color: red;">Solution</span></h3>
	<!--Procedure: Try to write the HTML code. Try to understand the problem by seeing the sample input/output given above. -->
		<form method="GET">
		Enter First Number:
		<input type="text" name="number1" /><br><br>
		Enter Second Number:
		<input type="text" name="number2" /><br><br>
		<input type="submit" name="submit" value="Calculate" />
		</form>
		<!-- PHP Action Script -->
		<?php
			@$number1=$_GET['number1'];
			@$number2=$_GET['number2'];
			@$sum = $number1+$number2;
			@$sub = $number1-$number2;
			@$mlt = $number1*$number2;
			echo "<br/>Summation:".$sum."<br/>";
			echo "Subtraction:".$sub."<br/>";
			echo "Multiplication:".$mlt;
		?>
	<!-- Problem + Solution: 001 [END]-->
	<hr>
	<!-- Problem + Solution: 002 [START]-->
	<h3>
		<span style="color: green;"> Problem 2: Write a program to show the list of all prime numbers within given interval 
		</span>
	<h3>
	<h3><span>Sample Output:</span></h3>
	<img src="Picture2.png" alt="sample One" />
	<hr>
	<h3><span style="color: red;">Solution</span></h3>
	<!--Procedure: Try to write the HTML code. Try to understand the problem by seeing the sample input/output given above. -->
		<form method="POST">
		Enter First Number:
		<input type="text" name="number1" /><br><br>
		Enter Second Number:
		<input type="text" name="number2" /><br><br>
		<input type="submit" name="btnPrime" value="Find Prime" />
		</form>
		<!-- PHP Action Script -->
		<?php
			if(isset($_POST['btnPrime'])=="Find Prime"){
				@$n1=$_POST['number1'];
				@$n2=$_POST['number2'];
			    for($i=$n1+1; $i<$n2; ++$i) {
			    	$flag=0;
			    	for($j=2; $j<=$i/2; ++$j) {
			    		if($i%$j==0) {
			    			$flag=1;
			    			break;
			    		}
			    	}
			    	if($flag==0) 
			    		echo $i.", ";
			    }  
			}
		?>
	<!-- Problem + Solution: 002 [END]-->
	<hr>
	<!-- Problem + Solution: 003 [START]-->
	<h3>
		<span style="color: green;"> Problem 3: Write a program to calculate summation of data pf an Array size of 6 in PHP  
		</span>
	<h3>
	<h3><span>Sample Output:</span></h3>
	<img src="Picture3.png" alt="sample One" />
	<hr>
	<h3><span style="color: red;">Solution</span></h3>
	<!--Procedure: Try to write the HTML code. Try to understand the problem by seeing the sample input/output given above. -->
		<form method="POST">
		Number 1:<input type="text" name="number[]" />
		Number 2:<input type="text" name="number[]" /><br>
		Number 3:<input type="text" name="number[]" />
		Number 4:<input type="text" name="number[]" /><br>
		Number 5:<input type="text" name="number[]" />
		Number 6:<input type="text" name="number[]" /><br>
		<input type="submit" name="btnMax" value="Find Summation" />
		</form>
		<!-- PHP Action Script -->
		<?php
			if(isset($_POST['btnMax'])){
				@$n=$_POST['number'];			
				$sum=0;
			    for($i=1; $i<6; ++$i) {
			    	$sum += $n[$i];
			    	//echo "Values:".$n[$i].", ";
			    }
			    echo "Summation:".$sum;
			}
		?>
	<!-- Problem + Solution: 002 [END]-->
	<hr>
	<h3>
		<span style="color: blue;"> Task 1: Write a PHP program to print all unique values of an integer array. (No HTML FORM need)
		</span>
	<h3>
	<h3><span>Sample Output:</span></h3>
	<img src="Picture4.png" alt="Sample One" />
</body>
</html>