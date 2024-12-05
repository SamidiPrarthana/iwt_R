<center<?php 
	
	session_start();

	include_once'connect.php';
	
?>
<html>
<head>
</head>
<body background="images/3.jpg">
<center><h1 style="font-size:50px;color:black;">All Recipe Details</h1></center><br><br>

<center><table border="2" width="85%" height="25%">
	  <thead style="background-color:black;color:white;font-size:30px">
		<tr>
		  <th scope="col">Recipe ID</th>
		  <th scope="col">Recipe Name</th>
		  <th scope="col">Recipe Description</th>
		  <th scope="col">Create Date</th>
		  <th scope="col">Creator Name</th>
		  <th scope="col">Action</th>
		</tr>
	  </thead>
	  <tbody>
		<?php 
			$query="SELECT * FROM addrecipe ";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($result)){
				?>
				<tr style="background-color:white;font-size:25px;text-align:center">
					  <td><?php echo $row['Recipe_id'] ?></td>
					  <td><?php echo $row['Recipe_name'] ?></td>
					  <td><?php echo $row['Recipe_description'] ?></td>
					  <td><?php echo $row['Create_day'] ?></td>
					  <td><?php echo $row['Creator_name'] ?></td>
					  <td><a href="removeRecipe.php?id=<?php echo $row['Recipe_id']?>">Delete</a></td>
				</tr>
				
				<?php
			}
		?>
  </tbody>
</table>
</center><br>
<button style="margin-left:90%"> <a href="myprofile.php">Back</a> </button>
 
</body>
</html>