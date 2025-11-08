<?php
// process_payment.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $dressName = $_POST['dressName'];
    $productId = $_POST['productId'];
    $price = $_POST['price'];
    $paymentMethod = $_POST['paymentMethod'];

    // Simple validation
    if (empty($dressName) || empty($productId) || empty($price) || empty($paymentMethod)) {
        echo "All fields are required.";
        exit;
    }

    // Mock payment process (add your payment logic here)
    // For example, redirect to a payment gateway or update the order in your database
    
    // Display success message
    echo "<h2>Payment Successful!</h2>";
    echo "<p>Thank you for purchasing <strong>$dressName</strong> with Product ID: <strong>$productId</strong>.</p>";
    echo "<p>Total Payment: <strong>$price</strong></p>";
    echo "<p>Payment Method: <strong>$paymentMethod</strong></p>";
    echo "<a href='index.html'>Back to Home</a>";
} else {
    // If accessed without POST request
    echo "Invalid request method.";
}
?>
