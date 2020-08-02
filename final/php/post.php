<?php
//// echo '<script type="text/javascript">alert("hello!");</script>';

$suburb = $_POST['suburb'];
$subjects = $_POST['subjects'];
$experience = $_POST['experience'];
$qualification = $_POST['qualification'];
$education = $_POST['education'];
$complete = $_POST['complete'];
$owntransport = $_POST['owntransport'];
$price = $_POST['price'];
$bio = $_POST['bio'];
$agerange = $_POST['agerange'];
$radius = $_POST['radius'];
$profile = $_POST['profile'];


$host = "localhost";
$user = "root";
$pass = "";
$db = "tutoring_website";


// Create connection
$conn = new mysqli($host, $user, $pass, $db) or die("Unable to connect to database " + $db);

$insert = "INSERT INTO tutor_post (Email, FirstName, LastName, Contacts, Gender, DateOfBirth, Passwords) VALUES ('$email', '$fname', '$lname', '$contact', '$gender', '$dob','$psw')";
$stmt = $conn->prepare($insert);
$stmt->execute();
echo '<script type="text/javascript">alert("Success!");</script>';
header("Location: http://localhost/tutoring_website/final/html/splash.html");
$conn->close();

?>  


