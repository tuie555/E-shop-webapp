<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's input
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $passwordd = "12345";
    $dbname = "e-comerce";

    $conn = new mysqli($servername, $username, $passwordd, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO register (name, email, password) VALUES (?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("sss", $name, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect the user to the home page
        header("Location: home.php");
        exit();
    } else {
        // Display an error message
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>