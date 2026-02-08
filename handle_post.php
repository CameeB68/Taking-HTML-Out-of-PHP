<?php
// Function to clean user input (pages 106–107)
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Clean POST data
$name = clean_input($_POST['name']);
$email = clean_input($_POST['email']);
$comments = clean_input($_POST['comments']);

// Display output
echo "<h2>Form Results</h2>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Comments:</strong><br>$comments</p>";
?>
