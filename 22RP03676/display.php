<button style="text-decoration: none;color: skyblue;background-color: lightblue; border-radius: 5px;"><a href="insert.php" style="text-decoration:none;">Add new student</a></button>
<button style="text-decoration: none;color: skyblue;background-color: lightblue; border-radius: 5px;"><a href="logout.php" style="text-decoration:none;">Logout</a></button>

<table border="1">
	<tr>
		<th>Employee ID</th> <th>Name</th><th>Email</th><th>Phone number</th><th>Position</th><th>Address</th><th>Action</th>
	<?php
	
	$con=mysqli_connect("localhost","root","","nextech_portal_22rp03676");
	$query=mysqli_query($con,"select*from employees");

	while($fetch=mysqli_fetch_array($query)){
		?>
		<tr>
			<td> <?php echo $fetch['id'] ?></td>
			<td> <?php echo $fetch['employee_name'] ?></td>
			<td> <?php echo $fetch['email'] ?></td>
			<td> <?php echo $fetch['phone'] ?></td>
            <td> <?php echo $fetch['position'] ?></td>
            <td> <?php echo $fetch['address'] ?></td>
            <td>
            	 <a href="delete.php?id=<?php echo $fetch['id'];?>">Delete</a>
            	 <a href="update.php?id=<?php echo $fetch['id'];?>">Update</a>
            </td>
		</tr>
		<?php
	}
	?>

</table>
