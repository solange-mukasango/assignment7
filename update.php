<?php
session_start();
if (!isset($_SESSION['username'])) 
	{
		header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>
<body>
    <h1>Update Form</h1>
    <form action="" method="POST">
        <label for="room_id">room_id</label>
        <input type="text" name="room_id" id=""><br>
        <input type="submit" name="update" value="update">
    </form>
</body>
</html>

<?php
include_once "connection.php";

if (isset($_POST['update'])) {
    $h = $_POST['room_id'];

    $query = mysqli_query($con, "SELECT * FROM room WHERE room_id='$h'");

    
    if  (mysqli_num_rows($query) > 0)
         {
        while ($col = mysqli_fetch_array($query)) {
            $a=$_POST['room_id'];
       $b = $col['room_number'];
            $c = $col['room_type'];  
             $d = $col['price_per_night'];
              $e = $col['floor'];  

        }

        echo "
        <form action='' method='POST'>
            <label for='room_id'>room_id</label>
            <input type='text' name='room_id' value='$a'><br>
            <label for='mname'>room_number</label>
            <input type='text' name='room_number' value='$b'><br>
            <label for='mcredit'>room_type</label>
            <input type='text' name='room_type' value='$c'><br>
               <label for='mcredit'>price_per_night</label>
            <input type='text' name='price_per_night' value='$d'><br>
               <label for='status'>floor</label>
            <input type='text' name='floor' value='$e'><br>

            <input type='submit' name='submit' value='submit'>
        </form><br><br>";
    } else {
        echo "<p>No record found for room_id: <b>$h</b></p>";
    }
}
 if (isset($_POST['submit'])) {
     $p=$_POST['room_id'];
  $a=$_POST['room_number'];
        $b=$_POST['room_type'];
        $c=$_POST['price_per_night'];
       
        $e=$_POST['floor'];
        $update = mysqli_query($con, "UPDATE room SET room_number='$a', room_type='$b',price_per_night='$c',floor='$e' WHERE room_id='$p'");

        if ($update) {
            echo "<p style='color:green;'>Record updated successfully!</p>";
        } else {
            echo "<p style='color:red;'>Failed to update record: " . mysqli_error($con) . "</p>";
        }
    }
    ?>