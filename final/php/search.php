    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="small-title">WCT</div>
                <div class="menu">
                    <a href="../html/search.html">Search <i class="fas fa-search"></i>
                    </a>
                    <a href="../html/splash.html">Post <i class="fas fa-user-plus"></i></a>
                    <a href="../html/about.html">About <i class="fas fa-question-circle"></i></a>
                    <a href="../html/splash.html"><i class="fas fa-user-times"></i></a>
                </div>
                <div class="dropdown-content">
                    <a href="../html/search.html">Search</a>
                    <a href="../html/splash.html">Post</a>
                    <a href="../html/about.html">About</a>
                </div>
            </div>
            <?php

            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "tutoring_website";

            $conn = new mysqli($host, $user, $pass, $db);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $gender = $_POST['gender'];
            $suburb = $_POST['suburb'];
            $subject = $_POST['subject'];
            $transport = $_POST['owntransport'];
            $age = $_POST['agerange'];


            $result = mysqli_query($conn, "select * from tutor_post, user_login where tutor_post.User_Email = user_login.Email and user_login.Gender " . $gender . " and tutor_post.Suburb " . $suburb . " and tutor_post.Subjects " . $subject . " and tutor_post.OwnTransport " . $transport . " and tutor_post.Ageranges " . $age . "") or die("Unable to read data");

            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card text-white bg-dark" id="tutor-card">
                        <img class="tutor-img" src="../images/<?php echo $row['Images'] ?>" alt="Card image cap">
                        <div class="tutor-body">
                            <h5 class="tutor-name"><?php echo $row['FirstName'] . " " . $row['LastName'] ?></h5>
                            <p class="tutor-subject">Lectures <?php echo $row['Subjects'] ?></p>
                            <p class="tutor-price">R<?php echo $row['LessonPrice'] ?> / hr</p>
                            <form action="../php/view.php" method="POST">
                                <input name="id-record" type="text" value="<?php echo $row['idtutor'] ?>" style="display: none;">
                                <button type="submit" class="btn btn-primary">View</button>
                            </form>
                        </div>
                    </div>
                <?php
                }
            } else {

                ?>
                <div class="error-response">
                    No records found!
                </div>
            <?php
            }
            $conn->close();
            ?>
        </div>
        <div class="footer">
            <a href="../html/about.html #contact-division" class="footer-buttons-left">Contact Us</a><a href="../html/about.html #terms-division" class="footer-buttons-left">T&C's</a>
            <i class="far fa-dot-circle"></i> Page Created By Andrew Hart - Cape Town - 2020 <i class="far fa-dot-circle"></i>
            <a href="../html/about.html #faq-division" class="footer-buttons-right">FAQ</a><a href="../html/about.html #social-division" class="footer-buttons-right">Social</a>

        </div>

        <div class="small-footer">
            <i class="far fa-dot-circle"></i> Page Created By Andrew Hart - Cape Town - 2020 <i class="far fa-dot-circle"></i>

        </div>

        <div class="super-small-footer">
            <i class="far fa-dot-circle"></i> Page Created By Andrew Hart <i class="far fa-dot-circle"></i>
        </div>
    </body>

    </html>