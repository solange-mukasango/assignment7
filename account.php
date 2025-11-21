<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
    SIGN UP TO YOUR ACCOUNT
    </h1>
    <br>
    <form action=""  method="POST">
        <label for="user_id">user_id</label>
        <input type="text" name="user_id" id="">

        <label for="user name">user name</label>
        <input type="text" name="username" id="">
        <label for="email">email</label>
        <input type="email" name="email" id="">
        <label for="password">password</label>
    <input type="password" name="password" id=""><br><br><br>
    <input type="submit" name="create" id="" values="create">
    <a href="login.php">SIGN IN</a><p>if you have any account</p>
    </form>
</body>
</html>
<?php
include_once'connection.php';
if(isset($_POST['create'])){
    $a=$_POST['user_id'];
    $b=$_POST['username'];
    $c=$_POST['email'];
    $d=$_POST['password'];
    $query=mysqli_query($con,"SELECT * FROM user WHERE user_id='$a'");
    if(mysqli_num_rows($query)>0){
        echo"account are exist";
    }
    else{
        $query1=mysqli_query($con,"INSERT INTO user (user_id,username,email,password) VALUES ('$a','$b','$c','$d')");
        if($query1){
            echo"account are created";
            header("location:login.php");
        }
        else{
            echo"account does not created".mysqli_error($con);
        }
    }
}

?>