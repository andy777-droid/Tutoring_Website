<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "tutoring_website";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id-delete'];
$email = $_POST['email'];

$result = mysqli_query($conn, "select * from tutor_post where idtutor = '" . $id . "'") or die("Unable to read data");
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
$row = mysqli_fetch_assoc($result);
if ($row['User_Email'] == $email) {
    $delete = mysqli_query($conn, "delete from tutor_post where idtutor = '".$id."'") or die("Unable to delete data");
    header("Location: http://localhost/tutoring_website/final/html/home.html?msg=success");

}else{
    header("Location: http://localhost/tutoring_website/final/html/home.html?msg=failed");

}

}else{
    header("Location: http://localhost/tutoring_website/final/html/home.html?msg=failed");

}


$conn->close();
?>