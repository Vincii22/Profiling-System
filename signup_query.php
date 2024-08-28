<?php
// Start the session
session_start();

// Include database connection file
include('connect.php');

if (isset($_POST['signup'])) {
    // Get the form data
    $username = $_POST['admin_user'];
    $password = $_POST['admin_pass'];
    $confirm_password = $_POST['confirm_pass'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
        echo "<script>window.location = 'signup.php';</script>";
        exit();
    }

    try {
        // Prepare an SQL statement
        $stmt = $con->prepare("INSERT INTO admin (admin_user,  admin_pass) VALUES (:username, :password)");

        // Bind the parameters
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!');</script>";
            echo "<script>window.location = 'index.php';</script>";
        } else {
            echo "<script>alert('Registration failed. Please try again.');</script>";
            echo "<script>window.location = 'signup.php';</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }

    // Close the connection
    $con = null;
}
?>
