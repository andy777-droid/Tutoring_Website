
  <?php

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $contact = $_POST['cell'];
  $username = $_POST['username'];
  $psw = $_POST['psw'];
  $cpsw = $_POST['cpsw'];

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "tutoring_website";


  // Create connection
  $conn = new mysqli($host, $user, $pass, $db) or die("Unable to connect to database " + $db);

  echo "Connected!!!";

  $insert = "INSERT INTO user_login (Email, Username, FirstName, LastName, Contacts, Passwords) VALUES ('$email', '$username', '$fname', '$lname', '$contact', '$psw')";
  $stmt = $conn->prepare($insert);
  $stmt->execute();
  $conn->close();
  ?>  

