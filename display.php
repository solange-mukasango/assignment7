
<?php
session_start();
if (!isset($_SESSION['username'])) 
	{
		header("location:login2.php");
}?>
<?php
// Connect to MySQL
include_once'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Employee List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
        a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        a.delete {
            background: #dc3545;
            color: white;
        }
        a.update {
            background: #28a745;
            color: white;
        }
        .msg {
            text-align: center;
            color: white;
            background: #28a745;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            width: 50%;
            margin: 10px auto;
        }
    </style>
</head>
<body>

<h2>room_lists</h2>


<table>
    <tr>
        <th>room_id</th>
        <th>rooo_number</th>
        <th>room_type</th>
        <th>price_per _night</th>
        <th>status</th>
        <th colspan="2">Commands</th>
    </tr>
    <?php
    $sql = mysqli_query($con, "SELECT * FROM room ORDER BY room_id ASC");
    while ($row = mysqli_fetch_assoc($sql)) {
    ?>
        <tr>
            <td><?php echo $row['room_id']; ?></td>
            <td><?php echo $row['room_number']; ?></td>
            <td><?php echo $row['room_type']; ?></td>
            <td><?php echo $row['price_per_night']; ?></td>
            <td><?php echo$row['status'];?></td>
            <td><a href="delete.php?delete=<?php echo $row['room_id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a></td>
            <td><a href="update.php?update=<?php echo $row['room_id']; ?>" class="update">Update</a></td>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>
