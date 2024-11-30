<?php
session_start();  // Start the session

// Hapus semua session yang ada
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke landing page setelah logout
header("Location: ../landingpage.php");
exit();  // Pastikan proses keluar setelah redirect
?>
