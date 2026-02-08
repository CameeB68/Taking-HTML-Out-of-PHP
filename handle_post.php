<?php
// Only process the form if it was submitted using POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Function to clean input data
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }

    // Assign and clean form variables
    $name = clean_input($_POST['name']);
    $email = clean_input($_POST['email']);
    $comments = clean_input($_POST['comments']);

    // Display the results
    echo "<h2>Form Results</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Comments:</strong><br>" . nl2br($comments) . "</p>";

} else {
    // If accessed directly without submitting the form
    echo "<p>This page was accessed incorrectly.</p>";
}
?>
