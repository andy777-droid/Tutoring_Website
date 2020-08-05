    <?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tutoring_website";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = mysqli_query($conn, "select * from tutor_post") or die("Unable to read data");
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $rows = mysqli_fetch_assoc($result);
        $email = $rows['User_Email'];
        $suburb = $rows['Suburb'];
        $subjects = $rows['Subjects'];
        $experience = $rows['TutoringExperience'];
        $qualification = $rows['Qualification'];
        $education = $rows['PlaceOfEducation'];
        $complete = $rows['YearComplete'];
        $owntransport = $rows['OwnTransport'];
        $price = $rows['LessonPrice'];
        $bio = $rows['Descriptions'];
        $agerange = $rows['Ageranges'];
        $radius = $rows['DrivingRadius'];
        $profile = $rows['Images'];
    } else {
    }

    $conn->close();

    ?>


