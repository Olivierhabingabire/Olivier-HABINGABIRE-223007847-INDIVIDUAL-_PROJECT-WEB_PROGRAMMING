<?php include 'connect.php'; ?>

<form method="POST">
<input name="fullname" placeholder="Full Name">
<input name="email" placeholder="Email">
<input name="phone" placeholder="Phone">
<input name="location" placeholder="Location">
<textarea name="message"></textarea>
<button name="send">Send</button>
</form>

<?php
if(isset($_POST['send'])){
$conn->query("INSERT INTO contacts VALUES('', '$_POST[fullname]', '$_POST[email]', '$_POST[phone]', '$_POST[location]', '$_POST[message]')");
echo "Message sent!";
}
?>