<?php
// Include the database connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize inputs
    $userName = htmlspecialchars($_POST['userName']);
    $email = htmlspecialchars($_POST['email']);
    $pNumber = htmlspecialchars($_POST['pno']);
    $address = htmlspecialchars($_POST['address']);
    $nic = htmlspecialchars($_POST['nicno']);
    $password = htmlspecialchars($_POST['pws']);

    // // Hash the password before storing it in the database
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL query to insert the user data
    $stmt = $conn->prepare("INSERT INTO users (userName, email, pNumber, address, nic, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $userName, $email, $pNumber, $address, $nic, $password);

    if ($stmt->execute()) {
        // Registration successful
        echo "<script>alert('Registration successful!'); window.location.href = '../login.php';</script>";
    } else {
        // Registration failed, possibly due to duplicate email or other issues
        echo "<script>alert('Registration failed. Please try again.'); window.location.href = '../register.php';</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>