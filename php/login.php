<?php
    $servername = "localhost";
    $username = "root"; // replace with your database username
    $password = ""; // replace with your database password
    $dbname = "LK TEXTILE"; // replace with your database name
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Collect login details
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    
    // Check credentials
    $sql = "SELECT * FROM users WHERE email = '$email' AND nic = '$nic'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid email or NIC number.";
    }
    
    $conn->close();
    ?>