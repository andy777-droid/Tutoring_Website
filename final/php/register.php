
  <?php

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $contact = $_POST['cell'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $psw = $_POST['idp'];
  $cpsw = $_POST['idp2'];

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "tutoring_website";


  // Create connection
  $conn = new mysqli($host, $user, $pass, $db) or die("Unable to connect to database " + $db);

  $result = mysqli_query($conn, "select * from user_login where Email = '$email'");
  $rows = mysqli_num_rows($result);
  if ($rows > 0) {
    header("Location: http://localhost/tutoring_website/final/html/registration.html");
  } else {
    $insert = "INSERT INTO user_login (FirstName, LastName, Email, Contact, Gender, DateOfBirth, Passwords) VALUES ('$fname', '$lname', '$email', '$contact', '$gender', '$dob', MD5('$psw'))";
    $stmt = $conn->prepare($insert);
    $stmt->execute();
    header("Location: http://localhost/tutoring_website/final/html/splash.html");
  };
  $conn->close();
  ?>  