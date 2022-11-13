<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'cse_458';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
    echo'not connect';
}else{echo'connect';}

//  INSERT DATA
//Collect and submit data

if (isset($_POST['submit'])){
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tbl_insert(fullname, address, gender, age_status)
    VALUES ('MDMARUF HOSSEN', 'MIRPUR-1','MALE','middle_age')";

    if (mysqli_query($conn, $sql)) {
        echo "table created successfully";
    } else {
        echo "Error creating tables: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>

<form action="index.php" method="post">
username: <input type="text" name="username"><br>
email: <input type="text" name="email"><br>
password: <input type="password" name="password"><br><br>
<input type="submit" name="submit">
</form>