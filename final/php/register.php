  <?php

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $contact = $_POST['cell'];
  $psw = $_POST['idp'];
  $cpsw = $_POST['idp2'];

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "tutoring_website";


  // Create connection
  $conn = new mysqli($host, $user, $pass, $db) or die("Unable to connect to database " + $db);

  $insert = "INSERT INTO user_login (Email, FirstName, LastName, Contacts, Passwords) VALUES ('$email', '$fname', '$lname', '$contact', '$psw')";
  $stmt = $conn->prepare($insert);
  $stmt->execute();
  $conn->close();
  header("Location: http://localhost/tutoring_website/final/html/splash.html"); 

  
  ?>  

