<?php
$conn = mysqli_connect("localhost", "root", "")or die("Connection failed!!");
mysqli_select_db($conn, "mbt")or die("Can't connect to database");
?>