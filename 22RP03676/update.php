<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background:gainsboro ;
	}
</style>
</head>
<body>
<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","nextech_portal_22rp03676");
$query=mysqli_query($con,"select*from employees where id='$id' ");
while($fetch=mysqli_fetch_array($query)){
	?>
	<form action="#" method="POST">
		<table border="1">
			<h2>Employees Update Form</h2>
			<tr>
				<td>Employee_id:</td>
				<td> <input type="number" name="id" value="<?php echo $fetch['id']; ?>"> </td>
			</tr>
			<tr>
			<tr>
				<td>Employee_name:</td>
				<td> <input type="text" name="name" value="<?php echo $fetch['employee_name']; ?>"> </td>
			</tr>
			<tr>
				<td>employee_email:</td>
				<td> <input type="text" name="email" value="<?php echo $fetch['email'] ;?>"> </td>
			</tr>
			<tr>
				<td>employee_phone:</td>
				<td> <input type="text" name="phone" value="<?php echo $fetch['phone']; ?>"> </td>
			</tr>
			<tr>
				<td>employee_position:</td>
				<td> <input type="text" name="position" value="<?php echo $fetch['position'] ?>;"> </td>
			</tr>
			<tr>
				<td>employee_address:</td>
				<td> <input type="text" name="address" value="<?php echo $fetch['address'] ?>;"> </td>
			</tr>
			<tr>
				<td><input type="submit" value="update" name="update" style="background-color: green;"></td>
			</tr>
		</table>
	</form>
	<?php
}
?>
<?php
if(isset($_POST['update'])){
	$a=$_POST['id'];
	$b=$_POST['name'];
	$c=$_POST['email'];
	$d=$_POST['phone'];
	$e=$_POST['position'];
	$f=$_POST['address'];
	
	$con=mysqli_connect("localhost","root","","nextech_portal_22rp03676");

	$update=mysqli_query($con,"update employees SET id='$a',employee_name='$b',email='$c',phone='$d',position='$e',address='$f' where id='$id' ");
	if($query){
		header("location:display.php");
	}
	else{
		echo"failed to update";
	}

}
?>
</body>
</html>