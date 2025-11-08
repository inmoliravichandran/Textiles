<?php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    
    // Handling Edit action
    if (isset($_POST["edit"])) {
        $sql = "UPDATE users SET name='$name', phone='$phone', address='$address' WHERE id=1"; // Use the actual user ID
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Handling Delete action
    if (isset($_POST["delete"])) {
        $sql = "DELETE FROM users WHERE id=1"; // Use the actual user ID
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

$conn->close();
?>
