<?php
// Connect to the database
include 'database.php';

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // The user is already logged in, so redirect them to the home page
    header("Location: home.php");
    exit;
}

// Check if the login form has been submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    $sql = "SELECT * FROM register WHERE name = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // The username and password are correct, so log the user in
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit;
    } else {
        // The username and password are incorrect, so display an error message
        echo "Invalid username or password.";
    }
}
?>