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
        sign in into your account
    </h1>
    <br>
    <form action=""  method="POST">
   

        <label for="user name">user name</label>
        <input type="text" name="username" id="">
      
        <label for="password">password</label>
    <input type="password" name="password" id=""><br><br><br>
    <input type="submit" name="login" id="" value="login">
    <a href="account.php">  SIGN UP </a>
    </form>
</body>
</html>
<?php
include_once'connection.php';
session_start();
if(isset($_POST['login'])){
  
    $b=$_POST['username'];

    $d=$_POST['password'];
    $query=mysqli_query($con,"SELECT * FROM user WHERE username='$b' and password='$d'");
    if(mysqli_num_rows($query)>0){
      $_SESSION['username']=$b;
      $_SESSION['password']=$d;
      header("location:index.php");
}
else{
    echo"incorrect username and password".mysqli_error($con);
}}
?>