<?php
session_start();
include 'dbh.php';


$username = $_POST['username'];
$pwd= $_POST['pwd'];

$sql = "SELECT * FROM user WHERE username='$username' AND password= '$pwd')";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "Error";
}else {
	$_SESSION['id'] = $row['id'];
}

header("Location: index.php");