<?php
session_start();

include 'dbh.php';

$username = $_POST['username'];
$pwd= $_POST['pwd'];
$email = $_POST['email'];

$sql = "INSERT INTO user (username, password, email) VALUES (
'$username', '$pwd', '$email')";

$result = mysqli_query($conn, $sql);

header("Location: index.php");