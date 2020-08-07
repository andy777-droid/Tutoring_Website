<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/tutoring_website/final/icons/fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="../css/design.css">
</head>

<body style="background-image: url(../icons/splash.jpg); background-size: cover; background-attachment: fixed;">
    <div class="main-info">
        <div class="header">
            <label class="hamburger" for="link">&#9776;</label>
            <input type="checkbox" id="link">
            <a href="../html/home.html"><img src="../icons/logo.png" class="logo"></a>
            <div class="title">Western Cape Tutors</div>
            <div class="menu">
                <a href="../html/search.html">Search <i class="fas fa-search"></i>
                </a>
                <a href="../html/splash.html">Post <i class="fas fa-user-plus"></i></a>
                <a href="../html/about.html">About <i class="fas fa-question-circle"></i></a>
                <a href="../html/splash.html"><i class="fas fa-user-times"></i></a>
            </div>
            <div class="dropdown-content">
                <a href="../html/search.html"><i class="fas fa-search"></i> Search</a>
                <a href="../html/post.html"><i class="fas fa-user-plus"></i> Post</a>
                <a href="../html/about.html"><i class="far fa-question-circle"></i> About</a>
            </div>
        </div>
        <?php

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "tutoring_website";
        $id = $_POST['id-record'];

        $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = mysqli_query($conn, "select * from tutor_post, user_login where tutor_post.idtutor = $id AND tutor_post.User_Email = user_login.Email") or die("Unable to read data");
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = $result->fetch_assoc()) {

                $user_email = $row['User_Email'];
                $suburb = $row['Suburb'];
                $subject = $row['Subjects'];
                $experience = $row['TutoringExperience'];
                $qualification = $row['Qualification'];
                $place = $row['PlaceOfEducation'];
                $complete = $row['YearComplete'];
                $transport = $row['OwnTransport'];
                $price = $row['LessonPrice'];
                $bio = $row['Descriptions'];
                $ages = $row['Ageranges'];
                $radius = $row['DrivingRadius'];
                $img = $row['Images'];

                $fname = $row['FirstName'];
                $lname = $row['LastName'];
                $contact = $row['Contact'];
                $gender = $row['Gender'];
                $date = $row['DateOfBirth'];

        ?>

                <div class="tutor-display">
                    <div class="row">
                        <div class="tutor-display-left">
                            <img class="tutor-display-image" src="../<?php echo $row['Images'] ?>" alt="">
                        </div>
                        <div class="tutor-display-right">
                            <div class="info">
                                <label class="label-tutor-heading"><?php echo $row['FirstName'] . " " . $row['LastName'] ?></label><br>
                                <label class="label-tutor-cell"><?php echo $row['Contact'] ?></label><br>
                                <label class="label-info"><?php echo $row['User_Email'] ?></label><br>
                            </div>

                        </div>
                        <div class="info-2">
                            <label class="label-tutor-heading"><?php echo $row['Subjects'] ?> @ R <?php echo $row['LessonPrice'] ?> / hr</label><br>
                            <label class="label-info">Gender : <?php echo $row['Gender'] ?></label><br>
                            <label class="label-info">Date Of Birth : <?php echo $row['DateOfBirth'] ?></label><br>
                        </div>

                    </div>

                    <div class="row" style="background-color: gray; border-radius : 20px; padding : 30px; color : white;">
                        eckwemvewc<br>
                        wefcfewe<br>
                        dcvdaev
                    </div>
                </div>

        <?php
            }
        } else {
            echo "Error";
        }

        $conn->close();

        ?>
    </div>
    <div class="footer"><a href="about.html #contact-division" class="footer-buttons-left">Contact Us</a><a href="about.html #terms-division" class="footer-buttons-left">T&C's</a>
        <i class="far fa-dot-circle"></i> Page Created By Andrew Hart - Cape Town - 2020 <i class="far fa-dot-circle"></i>
        <a href="about.html #faq-division" class="footer-buttons-right">FAQ</a><a href="about.html #social-division" class="footer-buttons-right">Social</a></div>
</body>

</html>