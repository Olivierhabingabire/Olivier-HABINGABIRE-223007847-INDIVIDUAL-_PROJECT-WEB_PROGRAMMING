<?php

$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data
$first = $_POST['first_name'];
$last = $_POST['last_name'];

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$dob = $year . "-" . $month . "-" . $day;

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$state = $_POST['state'];
$country = $_POST['country'];

$hobbies = implode(",", $_POST['hobbies']);

$course = $_POST['course'];

// Insert into DB
$sql = "INSERT INTO students 
(first_name, last_name, dob, email, mobile, gender, address, city, pin_code, state, country, hobbies, course)
VALUES 
('$first','$last','$dob','$email','$mobile','$gender','$address','$city','$pin','$state','$country','$hobbies','$course')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>