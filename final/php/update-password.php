<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "tutoring_website";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['epsw'];
$updatedpassword = $_POST['npsw'];

$result = mysqli_query($conn, "select * from user_login where Email = '" . $email . "' and Passwords = '" . $password . "'") or die("Unable to read data");
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $rows = mysqli_fetch_assoc($result);
    if (($rows['Email'] == $email) && ($rows['Passwords'] == $password)) {
        $update = mysqli_query($conn, "update user_login set user_login.Passwords = '".$updatedpassword."' WHERE user_login.Email = '".$email."'") or die("Unable to read data");
        header("Location: http://localhost/tutoring_website/final/html/splash.html");

    }else{
        header("Location: http://localhost/tutoring_website/final/html/change-password.html");
    }
}

$conn->close();

?>


