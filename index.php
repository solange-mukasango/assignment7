<?php
session_start();
if (!isset($_SESSION['username'])) 
	{
		header("location:login2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>hotel management</h1>
<ol>
	<li><a href="index.php">home</a></li>
	<li>insert
<ul>
	<li><a href="insert.php">room</a></li>
	
</ul>
	</li>
	<li>view
<ul>
	<li><a href="display.php">room</a></li>
	
</ul>
	</li>
	<li>update
<ul>
	<li><a href="update.php">room</a></li>
	
</ul>
	</li>
	<li>delete
<ul>
	<li><a href="delete.php">room</a></li>
	

	</li>
	<li><a href="logout.php">logout</a></li>
</ol>
<footer>
<ol><li>worked by:Mukasango Solange</li></ol></footer>
</body>
</html>