<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Login form</title>
	<style type="text/css">
		<style>
        body {
            font-family: Arial, sans-serif;
    
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        fieldset {
            width: 300px;
            border: 5px solid #333;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
        }
        input[type="text"], input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        
    </style>
	</style>
</head>
<body>
	<center>
	<fieldset style="width: 260px;border: 2px solid black;border-radius: 21px;s">
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<table>
	<h2>Login Form</h2>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="user" placeholder="enter username" required="required"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="pass" placeholder="enter password" required="required"></td>
	</tr>
	<tr>
		<td><input type="submit" name="login" value="Login" style="background-color: lightblue;"></td>
	</tr>
    <tr>
    </tr>
</table>
<button style="background-color: lightblue; border: radius 50%;">Remember Me</button>
</form>
</fieldset>
</center>
<?php
if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","nextech_portal_22rp03676");
$query=mysqli_query($con,"select*from users where username='$user' and password='$pass' ");
$fetch=mysqli_fetch_array($query);
if(is_array($fetch)){
	$_SESSION['users']=$fetch['username'];
	$_SESSION['passd']=$fetch['password'];
	if($_SESSION['users']==$user and $_SESSION['passd']){
     
		header("location:insert.php");
	}}
	else{ 
		echo"invalid username and password, please write correctly!";
	}

}
?>

</body>
</html>