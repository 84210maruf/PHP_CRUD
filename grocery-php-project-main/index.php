<?php
    include("connect.php");

    if (isset($_POST['btn']))
    {
      $name=$_POST['name'];
      $q="select * from grocerytb where Item_name='$name'";
      $query=mysqli_query($con,$q);
    }
    elseif ( isset($_POST['btn2'])){
      $date=$_POST['idate'];
      $q="select * from grocerytb where Date='$date'";
      $query=mysqli_query($con,$q);
    }    
    else 
    {
        $q= "select * from grocerytb";
        $query=mysqli_query($con,$q);
      }
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
  background-image: url("img_tree.gif"), url("paper.gif");
  background-color: #cccccc;
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
.topnav a.split {
  float: right;
  
  color: black;
}

</style>
            
    </head>
    <body>
      <div class="topnav">

        <a href="about.php" class="split">About us</a>
      <a href="index.php" class="split">Home</a>
      </div>

        <div class="container mt-5">
            
            <!-- top -->
              <div class="row">
                  <div class="col-lg-8">
                      <h1>View Grocery List</h1>
                      <a href="add.php" class='btn btn-secondary'>Add Item</a>
              </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Date Filtering-->
                            <form method="post" action="">
                              <input type="text" style="margin-bottom:10px;" class="form-control" placeholder="Product-search" name="name">
                              <input type="date" class="form-control" placeholder="Date-search" name="idate">
                        </div>
                          <div class="col-lg-4" method="post">
                            <input style="margin-bottom:10px;" type="submit" class="btn btn-warning float-right" name="btn" value="Search">
                            <input type="submit" class="btn btn-danger float-right" name="btn2" value="Search">
                        </div>
                            </form>
                            
                    </div>
                </div>
            </div>
           
            <!-- Grocery Cards -->
            <div class="row mt-4">
                
             <?php
                  while ($qq=mysqli_fetch_array($query)) 
                  { 
             ?>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body" style="background-color:rgba(201, 76, 76, 0.3);">
                          <h5 class="card-title"><?php echo $qq['Item_name']; ?></h5>
                          <h6 class="card-subtitle mb-2 text-muted"><?php echo $qq['Item_Quantity']; ?> Kg</h6>
                          <?php
                          if($qq['Item_status'] == 0) {
                          ?>
                            <p class="text-lightgrey">PENDING</p>
                          <?php
                          } else if($qq['Item_status'] == 1) {
                          ?>
                            <p class="text-lightgrey">BOUGHT</p>
                          <?php } else { ?> 
                            <p class="text-danger">NOT AVAILABLE</p>
                          <?php } ?>
                          <a href="delete.php?id=<?php echo $qq['Id']; ?>" class="card-link text-danger">Delete</a>
    					            <a href="update.php?id=<?php echo $qq['Id']; ?>" class="card-link">Update</a>
                        </div>

                      </div><br>
                </div>

                <?php
                  }
                ?>
                
            </div>
        </div>
    </body>
</html>
