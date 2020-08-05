<?php

$email = $_POST['email'];
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

$insert = "INSERT INTO tutor_post (idtutor, User_Email, Subjects, Suburb, TutoringExperience, Qualification, PlaceOfEducation, YearComplete, OwnTransport, LessonPrice, Descriptions, Ageranges, DrivingRadius, Images) VALUES (null,'$email', '$suburb', '$subjects', '$experience', '$qualification', '$education','$complete', '$owntransport', '$price', '$bio', '$agerange', '$radius', '$profile')";
$stmt = $conn->prepare($insert);
$stmt->execute();
header("Location: http://localhost/tutoring_website/final/html/search.html");
$conn->close();

?>  


