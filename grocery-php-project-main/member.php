<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            body{background-color:  #cccccc;}
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h1>Add members</h1>
            <form action="member.php" method="POST">
                <div class="form-group">
                    <label><b>name</b></label>
                    <input type="text" class="form-control" placeholder="name" name="name"/>
                </div>
                <div class="form-group">
                    <label><b>title</b></label>
                    <input type="text" class="form-control" placeholder="title"  name="title"/>
                </div>
                
                <div class="form-group">
                    <label><b>message</b></label>
                    <input type="text" class="form-control" placeholder="message"  name="message"/>
                </div>
                <div class="form-group">
                    <label><b>intake</b></label>
                    <input type="text" class="form-control" placeholder="intake" name="intake">
                </div>
                <div class="form-group">
                    <label><b>ID</b></label>
                    <input type="text" class="form-control" placeholder="ID" name="id">
                </div>
                <div class="form-group">
                    <label><b>gmail</b></label>
                    <input type="text" class="form-control" placeholder="gmail" name="gmail">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add" class="btn btn-danger" name="btn">
                </div>
            </form>
        </div>
		<?php
           if(isset($_POST["btn"]))
           {
	           include("connect.php");
               $name=$_POST['name'];
               $title=$_POST['title'];
               $message=$_POST['message'];
               $intake=$_POST['intake'];
               $id=$_POST['id'];
               $gmail=$_POST['gmail'];
    

               $q="insert into about(name,title,message,intake,bubt_id,gmail)values('$name','$title','$message','$intake','$id','$gmail')";

               mysqli_query($con,$q);
               header("location:about.php");

	 
            }
			// if(!mysqli_query($con,$q))
            // {
	             // echo "Value Not Inserted";
             // }
             // else
             // {
               	// echo "Value Inserted";
             // }
         ?>
		
    </body> 
</html>
