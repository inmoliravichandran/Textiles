<?php
                    // Include your database connection file
                    include('Conection.php');

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enquiry_submit'])) {
                        // Retrieve form data
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $number = $_POST['number'];
                        $message = $_POST['message'];

                        // Prepare an insert statement
                        $sql = "INSERT INTO enquiries (name, email, number, message) VALUES (?, ?, ?, ?)";

                        if ($stmt = $conn->prepare($sql)) {
                            // Bind variables to the prepared statement as parameters
                            $stmt->bind_param("ssss", $name, $email, $number, $message);

                            // Attempt to execute the prepared statement
                            if ($stmt->execute()) {
                                echo "<script>alert('Enquiry submitted successfully.');</script>";
                            } else {
                                echo "<script>alert('ERROR: Could not execute query. " . $conn->error . "');</script>";
                            }
                        } else {
                            echo "<script>alert('ERROR: Could not prepare query. " . $conn->error . "');</script>";
                        }

                        // Close statement
                        $stmt->close();

                        // Close connection
                        $conn->close();
                    }
                    ?>