<?php
$con=mysqli_connect("localhost","root","","nextech_portal_22rp03676");
$username="uwase";
$password=password_hash("123",true);
try{
$in="INSERT INTO users (username,password) VALUES('$username','$password')";
$save=mysqli_query($con,$in);
if($save){
    echo"user registred !";
}else{
    echo "error ".mysqli_error($con);
}
}catch(PDOException $e){
    echo "error ".$e->getMessage();
}
?>