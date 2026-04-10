<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>

<h2>STUDENT REGISTRATION FORM</h2>

<form action="connect.php" method="POST">

First Name: <input type="text" name="first_name"><br><br>
Last Name: <input type="text" name="last_name"><br><br>

Date of Birth:
<select name="day">
<option>Day</option>
<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
</select>

<select name="month">
<option>Month</option>
<?php for($i=1;$i<=12;$i++) echo "<option>$i</option>"; ?>
</select>

<select name="year">
<option>Year</option>
<?php for($i=1990;$i<=2025;$i++) echo "<option>$i</option>"; ?>
</select>
<br><br>

Email: <input type="email" name="email"><br><br>
Mobile: <input type="text" name="mobile"><br><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>

Address:<br>
<textarea name="address"></textarea><br><br>

City: <input type="text" name="city"><br><br>
Pin Code: <input type="text" name="pin"><br><br>
State: <input type="text" name="state"><br><br>

Country:
<select name="country">
<option>--Select Country--</option>
<option>Rwanda</option>
<option>India</option>
<option>USA</option>
<option>UK</option>
<option>Canada</option>
</select>
<br><br>

Hobbies:
<input type="checkbox" name="hobbies[]" value="Drawing">Drawing
<input type="checkbox" name="hobbies[]" value="Singing">Singing
<input type="checkbox" name="hobbies[]" value="Dancing">Dancing
<input type="checkbox" name="hobbies[]" value="Sketching">Sketching
<br><br>

Course:
<input type="radio" name="course" value="BCA">BCA
<input type="radio" name="course" value="BCom">B.Com
<input type="radio" name="course" value="BSc">B.Sc
<input type="radio" name="course" value="BA">B.A
<br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>