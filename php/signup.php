<?php
// signup.php

// Database connection (modify with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual database password
$dbname = "washmatic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user inputs
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match. Please try again.'); window.history.back();</script>";
        exit();
    }

    // Check if email already exists in the database
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists. Please use a different email.'); window.history.back();</script>";
    } else {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert the new user data into the database
        $insertQuery = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashedPassword')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>alert('Sign-up successful! Redirecting to home page...'); window.location.href = 'home.html';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "'); window.history.back();</script>";
        }
    }
}

// Close the database connection
$conn->close();
?>
