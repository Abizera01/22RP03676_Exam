<?php
session_start();
$con=mysqli_connect("localhost","root","","nextech_portal_22rp03676")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body><center>
    <fieldset style=" width:50%; height:50%;">
        <legend> Employee Management System</legend>
        <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <input type="text" name="username" value="<?= isset($_COOKIE['username']) ? unserialize($_COOKIE['username']) :""?>" placeholder="Type your username"><br>
            <input type="password" name="password" value="<?= isset($_COOKIE['userpass']) ? unserialize($_COOKIE['userpass']) :""?>"  placeholder="Type your password"><br>
            <input type="radio" name="remember">Remember me<br>
            <input type="submit" name="login" value="login"><br>
        </form>
    </fieldset>
</center>
 <?php

if(isset($_POST['login'])){
    function test_input($data){
        $data=htmlentities($data);
        $data=trim($data);
        $data=stripslashes($data);
        return $data;
    }

    $username=test_input($_POST['username']);
    $password=test_input($_POST['password']);

    if(!empty($username) || !empty($password)){

        if(preg_match('/^[a-zA-Z0-9]+$/',$username)){

            if(preg_match('/^[A-Za-z]+[)(*&^%$#@@!]+[0-9]+$/',$password)){


                $sel="SELECT* FROM users where username='$username'";
                $save=mysqli_query($con,$sel);
                if(mysqli_num_rows($save)==1){
                    while($row=mysqli_fetch_assoc($save)){
                        $password_stored=$row['password'];
                        if(password_verify($password,$password_stored)){
                            $_SESSION['username']=$row['username'];



                            if(isset($_POST['remember'])&&!empty($_POST['remember']) ){
                                setcookie("username",serialize($_POST['username']),time()+60*60*7);
                                setcookie("userpass",serialize($_POST['password']),time()+60*60*7);

                            }

                            header("Location:insert.php");
                        }
                      
                    }
                }else{
                    echo"No user found";
                }



            }else{
                echo 'Invalid password';
            }


        }else{
            echo "Please enter valid username";
        }



    }else{
        echo "Please enter your username and password";
    }


}
?>

</body>
</html>