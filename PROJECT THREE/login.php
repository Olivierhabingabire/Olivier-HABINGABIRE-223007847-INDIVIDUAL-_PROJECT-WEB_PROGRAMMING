<?php
session_start();
include 'connect.php';

if(isset($_POST['login'])){
$res=$conn->query("SELECT * FROM users WHERE username='$_POST[username]' AND password='$_POST[password]'");

if($res->num_rows>0){
$_SESSION['user']=$_POST['username'];
header("Location: dashboard.php");
}
}
?>

<form method="POST">
<input name="username">
<input type="password" name="password">
<button name="login">Login</button>
</form>