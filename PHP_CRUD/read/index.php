<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'users';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
    echo'not connect';
}else{echo'connect <br>';}



//  READ DATA

$query = "SELECT * FROM user_info";

// call all the data from user_info table
$alldata = mysqli_query($conn,$query);

//if table have NO DATA
$countRows = mysqli_num_rows($alldata);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>NAME</th><th>GMAIL</th><th>PASS</th><th>DATE</th></tr>";
if($countRows >0 ){

    while( $datarow = mysqli_fetch_assoc($alldata)){
        //Individual Data
    //$id = $datarow['id'];
    //$username = $datarow['username'];
    //$email = $datarow['email'];
    //$password = $datarow['password'];
    //$date = $datarow['submission_date'];

    echo "<tr>";
    foreach ($datarow as $field => $value) { 
    echo "<td>" . $value . "</td>";}
    echo "<tr>";
}

}else{echo ' <br> Table have NO DATA';}
echo "</table>";

?>