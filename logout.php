<?php
session_start();
session_destroy();
session_unset();
setcookie("username", "", time() - 3600, "/");
header("location:login2.php");

?>