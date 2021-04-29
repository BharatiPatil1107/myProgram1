<?php
include "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale="1>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 


    <title>User Registation Form</title>
  </head>
  <script type="text/javascript">
  	</script>
  

  <body style="background-color:;">


    <!-- Optional JavaScript -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" ></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<style type="text/css">
		
	.container{
		background-color:skyblue;
		width: 600px;
		align:centre;
		border:2px solid #404040;
		margin-bottom:5px;
		position:relative;
	

	}
	h3{
		color:black;
		text-align:center;
		
	}
	.form-group label{
		color:black;
		font-family:Bold;
	}
	.form-row{
		color:black;
		font-family:Bold;

	}
	.col10{
		color:black;
		height:100px;
		width:auto;
		margin-left:10px;
		margin-bottom:100px;
	
	}
	
	table{
		border:3px dotted gray;
        margin-left: 250px;
		
	}
	th,td{
		color:black;
	}
	
	

	
	#text2{
	width: 100px;
	}
	


	
	</style>

  <div class="container">
  <div class="col-lg-12">
  <h3>BOOK NOW</h3>
  <form action="" name="form1" method="post" >
  <div class="form-group">
  <label for="example">Id</label>
    <input type="text" class="form-control" id="userid" name="id" aria-describedby="emailHelp" placeholder="Enter id" onkeypress="return isNumberKey(event);" required>
	
  </div>
   <div class="form-group">
    <label for="example">Name</label>
    <input type="text" class="form-control" id="name1" name="name1" aria-describedby="emailHelp" placeholder="Enter name" required>
	
  </div>
   <div class="form-group">
    <label for="example">Date of birth</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date1">
  </div>
  <div class="form-row">
   <div class="col-5">
    <label>Course</label>
    <select id="inputcourse" class="form-control" name="course">
	<option>Choose...</option>
	<option>BCA- Bachelor of Computer Applications</option>
	<option>MCA-Master Of Computer Application</option>
    <option>B.Sc.- Information Technology</option>
	<option>BBA- Bachelor of Business Administration</option>
    <option>BE/B.Tech- Bachelor of Technology</option>
    <option>CA- Chartered Accountancy</option>
    
	</select>
	</div>

  </div>

   <div class="form-group">
    <label for="example">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>



   
   <div class="form-group">
    <label for="example">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="password" aria-describedby="passwordHelp" placeholder="Enter password" value="*">
  </div>
  



  

  <button type="submit" name="Insert" class="btn btn-primary" style="margin-left:200px; background-color:green; width:100px; font-size:20px;" >Save</button>
  
</form>
</div>
</div>

<div class="col-8">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
	  <th scope="col">Date</th>
      <th scope="col">Course</th>
      <th scope="col">Email</th>
	  <th scope="col">Password</th>


    </tr>
  </thead>
  <tbody>
   



  <!-- fetching data from database-->

   <?php
	$res=mysqli_query($link,"select * from register");
	while($row=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo "<td>";echo $row["id"]; echo"</td>";
		echo "<td>";echo $row["name1"]; echo"</td>";
		echo "<td>";echo $row["date1"]; echo"</td>";
        echo "<td>";echo $row["course"]; echo"</td>";
		echo "<td>";echo $row["email"]; echo"</td>";
		echo "<td>";echo $row["password"]; echo"</td>";
		

		echo"</tr>";
        
	}
	?>



  </tbody>
</table>
</div>






  </body>


  <!-- Inesrt code -->

  <?php
  if(isset($_POST["Insert"]))
  {
	  mysqli_query($link,"insert into register values('$_POST[id]','$_POST[name1]','$_POST[date1]','$_POST[course]','$_POST[email]','$_POST[password]')");

      ?>
    <script type="text/javascript">
      window.location.href= window.location.href;
    </script>
    <?php
        
    }
     
  ?>

</html>





































