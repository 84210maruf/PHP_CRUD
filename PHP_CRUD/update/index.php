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

if (isset($_POST['submit'])){
    
    $userid=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE user_info SET username='$username',email='$email',password='$password' WHERE id='$userid'";

    if (mysqli_query($conn, $sql)) {
        echo "table created successfully";
    } else {
        echo "Error creating tables: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}



?>

<form action="index.php" method="post">
id: <input type="text" name="id"><br>
username: <input type="text" name="username"><br>

email: <input type="text" name="email"><br>
password: <input type="password" name="password"><br>
<input type="submit" name="submit">
</form>