<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'myDB';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
    echo'not connect';
}else{echo'connect';}

// Create database

//$sql = "CREATE DATABASE myDB";

// Create table

//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";

// INSERT data
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";



//Collect and submit data

if (isset($_POST['submit'])){
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$firstname', '$lastname', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "table created successfully";
    } else {
        echo "Error creating tables: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>

<form action="index.php" method="post">
firstname: <input type="text" name="firstname"><br>
lastname: <input type="text" name="lastname"><br>
email: <input type="text" name="email"><br>
<input type="submit" name="submit">
</form>