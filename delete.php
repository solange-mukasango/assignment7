<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>deletion the room</h1>
    <form action=""  method="POST">
          <label for="room_id">m_code</label>
        <input type="text" name="room_id" id=""><br>
        <input type="submit" name="delete" id="" values="delete">
    </form>
</body>
</html>
<?php
include_once"connection.php";
if (isset($_POST['delete'])) 
    {
$a=$_POST['room_id'];
$query=mysqli_query($con,"select * from room where room_id='$a'");
if(mysqli_num_rows($query)>0){
    $query2=mysqli_query($con,"delete from room where room_id='$a'");
    if($query2){
        ?>
        <script>
            alert("data are removed");
        </script><?php
    }
    else{
        ?>
        <script>
            alert("data are failled to removed");
            header("location:display.php");
        </script><?php
         header("location:display.php");
    }
}
else{
     ?>
        <script>
            alert("invalid room id");
        </script><?php
}
}

?>
<button><a href="index.php">back</a></button>