<?php

$user = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];

header("Location: http://localhost/tutoring_website/final/html/post.html?user=" . $user . "&name=" . $name . "&surname=" . $surname);
?>