<?php

    include("connect.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$RecipeName=$_POST['recipename'];
		$Description=$_POST['description'];
		$Day=$_POST['day'];
		$Name=$_POST['name'];

		$query ="INSERT INTO addrecipe(`Recipe_name`, `Recipe_description`, `Create_day`, `Creator_name`)VALUES('$RecipeName','$Description','$Day','$Name')";
			
		mysqli_query($conn,$query);
		
		header("location:submitRecipe.php");
	   echo "<script type='text/javascript'>alert('Successfully Register')</script>";
	}
?>
<html>

<head>
<title></title>


<style>
div {
  background-image:url('images/1.jpg');
  background-size:cover;
  background-repeat:no-repeat;
  background-attachment:fixed;
  width: 500px;
  height:620px;
  border: 10px  double black;
  border-radius:40px;
  padding: 50px;
  margin: 20px auto 0;
  opacity: 75%;
}
input{
	border-radius:5px;
	border:2px solid;
	height:5%;
<

}


</style>
</head>

<body background="images/2.jpg">

navi bar

<br><br><br>
<div>
<center>
    <h1 style="font-weight:bold;font-size:45px;text-shadow: 1px 1px 2px white, 0 0 25px white, 0 0 5px red">Add New Recipe</h1>
</center>
<form method="POST">
	
    <h3 style="font-weight:bold;font-color:black;font-size:25px;">Recipe Name:<br>
    <input type="text" name="recipename" placeholder="Recipe Name" required><br/></br>
        
	
    Recipe Description:<br/>
    <textarea name="description" placeholder="Description" rows=8 cols=50 required></textarea><br/><br/>
        
    Create Date:<br/>
    <input type="date" name="day" placeholder="date" required><br/><br/>
        
    Creator Name:<br/>
    <input type="text" name="name" placeholder="Creator Name"  required><br/><br/>
     
	</h3>
	<center><br>
    <input style="background-color:black;color:white;font-weight:bold;text-decoration-line:none;font-size:15px;border-radius:20px;margin-left:5px;	width:20%; %" type="submit" value="Add">

	
	</center>	
	</form>	
   </div>
   
    


<br><br><br><br>

</body>
</html>