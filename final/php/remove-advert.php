<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"
        href="http://localhost/tutoring_website/final/icons/fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.css">
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

$email = $_POST['email'];

$result = mysqli_query($conn, "select * from tutor_post where tutor_post.User_Email = '".$email."'") or die("Unable to read data");

$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    ?>
        <table class="table table-striped table-dark" style="width: 90%; margin : 30px auto 0 auto">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Lesson Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
    while ($row = $result->fetch_assoc()) {
?>
                <tr>
                    <th scope="row"><?php echo $row['idtutor'] ?></th>
                    <td><?php echo $row['User_Email'] ?></td>
                    <td><?php echo $row['Subjects'] ?></td>
                    <td><?php echo $row['LessonPrice'] ?></td>
                </tr>

                <?php
    }
    ?>
            </tbody>
        </table>

        <form class="form-delete-record" action="delete-record.php" method="POST">
            <label for="id-delete">Select record ID</label>
            <input type="number" name="id-delete" id="id-delete" class="form-control">
            <input type="text" name="email" id="email" style="display : none" value="<?php echo $email ?>">
            <button type="submit" class="btn btn-primary btn-lg" style="display : inline-block">Delete</button>

        </form>
        <?php
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
        <a href="../html/about.html #contact-division" class="footer-buttons-left">Contact Us</a><a
            href="../html/about.html #terms-division" class="footer-buttons-left">T&C's</a>
        <i class="far fa-dot-circle"></i> Page Created By Andrew Hart - Cape Town - 2020 <i
            class="far fa-dot-circle"></i>
        <a href="../html/about.html #faq-division" class="footer-buttons-right">FAQ</a><a
            href="../html/about.html #social-division" class="footer-buttons-right">Social</a>

    </div>

    <div class="small-footer">
        <i class="far fa-dot-circle"></i> Page Created By Andrew Hart - Cape Town - 2020 <i
            class="far fa-dot-circle"></i>

    </div>

    <div class="super-small-footer">
        <i class="far fa-dot-circle"></i> Page Created By Andrew Hart <i class="far fa-dot-circle"></i>
    </div>
</body>

</html>