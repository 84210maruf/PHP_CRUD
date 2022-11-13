<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'users';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

     // DELETE DATA
    $recv = $_REQUEST['id'];
    $delquery = "DELETE FROM user_info WHERE user_info.id = $recv";

    $rundeletequery = mysqli_query($conn,$delquery);

    if($rundeletequery){
        header("location:index.php?delete");
    }

?>