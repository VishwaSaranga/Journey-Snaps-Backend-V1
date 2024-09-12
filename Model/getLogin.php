<?php
// Include the database connection file
include 'connection.php';

// Get the form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL query to check the user credentials
$stmt = $conn->prepare("SELECT userName FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Login successful
    $row = $result->fetch_assoc();
    $userName = $row['userName'];

    // Start the session and store the user's name
    session_start();
    $_SESSION['userName'] = $userName;

    // Redirect to the index.php page
    header("Location: ../index.php");
    exit;
} else {
    // Login failed
    echo "Invalid email or password.";
}

$stmt->close();
$conn->close();
?>
