<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    


<div class="container">

    <h1 class="logo">instagram</h1>

    <p class="title-text">Sign up to see photos<br>and videos from your friends.</p>

    <button class="fb-btn">login with facebook</button>

    <div class="line">or</div>

    <form method="POST">
        <input type="text" name="username" placeholder="username" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password"  maxlength="8" minlength="8"required>
        <input type="password"  name="confirm_password" placeholder="confirm_password" required>
    

    <p class="small-text">
        People who use our service may have uploaded your<br>
        contact information to Instagram. <a href="#">Learn More</a>
    </p>

    <p class="small-text">
        By signing up, you agree to our 
        <a href="#">Terms</a>, 
        <a href="#">Privacy Policy</a> and 
        <a href="#">Cookies Policy</a>.
    </p>

    <input type="submit" name="submit" class="signup-btn" value="sign up">

    <p class="signin-text">
        have account? <a href="login2.php">sign in</a>
    </p>
</form>
</div>
</body>
</html>
<?php
include_once'connection.php';
if(isset($_POST['submit']))
    {
    $a=$_POST['username'];
    $b=$_POST['email'];
    $c=$_POST['password'];
    $d=$_POST['confirm_password'];
   if ($c !== $d)
         {
    echo("Passwords do not match!");
} 
else {
  $query1=mysqli_query($con,"INSERT INTO user2 (username,email,password,confirm_password) VALUES ('$a','$b','$c','$d')");
        if($query1)
            {
                ?>
                <script>
            alert("account are created");</script><?php
            header("location:login2.php");
        }
        else{
            ?>
            <script>
            alert("account does not created").mysqli_error($con);
            </script><?php
        }
    }
}  
?>

