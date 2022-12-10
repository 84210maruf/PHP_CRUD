<?php
    include("connect.php");
      $q= "select * from about";
      $query=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  padding:100px;
  padding-top:10px;
  background-color:  #cccccc;
}

.topnav {
  overflow: hidden;
  background-color:  #cccccc;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create a right-aligned (split) link inside the navigation bar */

.topnav a.active {

    float:right;
  color: black;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: white;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: #888;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
  color:white;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>       
</head>
<body>
      <div class="topnav">
          <a href="about.php" class="active">About us</a>
      <a class="active" href="index.php">Home</a>

     
      </div>

        
    <h2 style="text-align:center">Our Team</h2>
    <div class="col-lg-8">
         <a href="member.php" class='btn btn-secondary'><b>Add Members</b></a>
    </div>

    <div class="row">
      <?php
          while ($qq=mysqli_fetch_array($query)) 
            {           
      ?>
      <div class="column">
        <div class="card">
      
          <div class="container">
            <h2></h2>
            <h2></h2>
            <h2 class="title"><?php echo $qq['name']; ?></h2>
            <p class="title"><b>Intake : <?php echo $qq['intake']; ?></b></p>
            <p class="title"><b>ID : <?php echo $qq['bubt_id']; ?></b></p>
            <p class="title"><b>Title : Team <?php echo $qq['title']; ?></b></p>
            <p class="title"><b><?php echo $qq['message']; ?></b></p>
            <p class="title"><b>gmail : <?php echo $qq['gmail']; ?></b></p>
            
            <p><a href="delete_member.php?id=<?php echo $qq['id']; ?>" class="btn btn-danger text-white"><b>Delete Member</b></a></p>
          </div>
        </div>
      </div>
      <?php
        }
      ?>          
    
    </body>
</html>
