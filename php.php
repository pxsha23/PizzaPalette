<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Save user data to a file (users.txt)
    $userData = "$name, $email\n";
    file_put_contents("users.txt", $userData, FILE_APPEND);
}
?>
