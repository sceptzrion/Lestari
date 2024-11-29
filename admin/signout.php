<?php
session_start();

session_unset();  
session_destroy(); 

// Arahkan pengguna kembali ke halaman login setelah logout
header('Location: login.php');
exit();
?>
