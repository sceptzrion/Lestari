<?php
session_start();
include('../controller/config.php');

// Mendapatkan data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Query untuk memeriksa email dan password di database
$query = "SELECT * FROM admin WHERE email = ? AND password = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['user'] = $email;
    header("Location: dashboard.php");
} else {
    echo "<script>
        alert('Email atau Password salah!');
        window.location.href='login.php';
    </script>";
}

$stmt->close();
$conn->close();
?>