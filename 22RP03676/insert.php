<html>
<head><title>Insert Form</title></head>
<Form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="width: 500px;height: 50px; background-color:dark;border-radius;">
    <h2>Employee Registration Form</h2>
    <Label for="employeename">Employee name:</Label>
    <input type="text" name="ename" required="required"><br><br>
    <Label for="employee_email">Employee Email:</Label>
    <input type="text" name="email" required="required"><br><br>
    <Label for="employee_phone">Employee Phone:</Label>
    <input type="text" name="phone" required="required"><br><br>
    <Label for="employee_position">Employee Position:</Label>
    <input type="text" name="position" required="required"><br><br>
    <Label for="employee_address" required="required">Employee Address:</Label>
    <input type="text" name="address" required="required"><br><br>

    <input type="submit" name="send" value="INSERT"><br>
</form>

</html>




<?php 

$con=mysqli_connect("localhost","root","","nextech_portal_22rp03676");
if(isset($_POST['send'])){

    $a=$_POST['ename'];
    $b=$_POST['email'];
    $c=$_POST['phone'];
    $d=$_POST['position'];
    $e=$_POST['address'];


$sql="insert into employees(employee_name,email,phone,position,address) values('$a','$b','$c','$d','$e')";
$query=mysqli_query($con,$sql);
if($query==true){
    header("location:display.php");
}
else{
    echo"Data not inserted!";
}
}
?>



