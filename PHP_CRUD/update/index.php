<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'users';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
    echo'not connect';
}else{echo'connect';}

//  UPDETE DATA
//Collect and submit data



    mysqli_close($conn);


?>

<form action="index.php" method="post">
id: <input type="text" name="id"><br>
username: <input type="text" name="username"><br>

email: <input type="text" name="email"><br>
password: <input type="password" name="password"><br>
<input type="submit" name="submit">
</form>