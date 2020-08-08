<?php

$user = $_POST['email'];

header("Location: http://localhost/tutoring_website/final/html/change-password.html?user=" . $user);
?>