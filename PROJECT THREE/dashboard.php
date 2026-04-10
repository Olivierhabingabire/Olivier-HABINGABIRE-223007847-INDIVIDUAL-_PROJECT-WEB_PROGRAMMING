<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['user'])){
header("Location: login.php");
}

$result=$conn->query("SELECT * FROM orders");

while($row=$result->fetch_assoc()){
echo $row['fullname']." - ".$row['menu']."<br>";
}
?>

<a href="logout.php">Logout</a>