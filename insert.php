    <?php
session_start();
if (!isset($_SESSION['username'])) 
	{
		header("location:login2.php");
}?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=
        , initial-scale=1.0">
        <title>Document</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1><center>booking room</center></h1>
            <form action="" method="POST">
                <label for="room number">room_number</label>
                <input type="text" name="room_number" id=""><br>
                <label for="room_type">room_type</label>
                <input type="text" name="room_type" id=""><br>
                    <label for="mcode">price per  night</label>
                    <input type="text" name="price_per_night" id=""><br>
                   
                    <label for="floor">floor</label>
                    <input type="text" name="floor" id="">
                    <input type="submit" name="submit" id="" values="submit">
            </form>
        </body>
        </html>
    <?php
    include"connection.php";
    if(isset($_POST['submit'])){
        $a=$_POST['room_number'];
        $b=$_POST['room_type'];
        $c=$_POST['price_per_night'];
       
        $e=$_POST['floor'];
        $quer=mysqli_query($con,"INSERT INTO room (room_number,room_type,price_per_night,floor) VALUES('$a','$b','$c','$e')");
        if($quer){
            echo"data are stored";
            header("location:display.php");
        }
        else{
            echo"failled to stored".mysqli_error($con);
        }
    }
    ?>
    <button><a href="index.php">back</a></button>
    </body>
    </html>
