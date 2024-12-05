<?php
session_start();
// Sertakan konfigurasi database
require_once('../../controller/config.php');

// Proses form ketika tombol Kirim ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['admin_email']); // Ambil email dari form dan hapus spasi
    $new_password = trim($_POST['password_baru']); // Ambil password baru

    // Validasi email dan password
    if (empty($email) || empty($new_password)) {
        $error = "Email dan password harus diisi.";
    } elseif (strlen($new_password) < 6) {
        $error = "Password harus memiliki minimal 6 karakter.";
    } else {
        // Cek apakah email ada di database
        $sql_check = "SELECT admin_id FROM admin WHERE admin_email = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {
            // Email ditemukan, hash password baru
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update password di database
            $sql_update = "UPDATE admin SET admin_password = ?, updated_at = NOW() WHERE admin_email = ?";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("ss", $hashed_password, $email);

            if ($stmt_update->execute()) {
                // Redirect ke halaman success.php setelah berhasil update
                header('Location: success.php'); 
                exit();
            } else {
                $error = "Kesalahan saat memperbarui password: " . $stmt_update->error;
            }
            $stmt_update->close();
        } else {
            $error = "Email tidak ditemukan.";
        }
        $stmt_check->close();
    }
}
$conn->close();
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../css/styles.css" rel="stylesheet">
  <title>Atur ulang kata sandi | Admin Lestari</title>
</head>
<body>
  <div class="flex justify-center bg-gradient-to-b from-green-admin to-dark-green-admin w-full h-screen p-[34px]">
    <div class="flex flex-col items-center bg-light w-[622px] h-auto rounded-[114px] pb-[75px] pt-6 px-[67px] text-dark gap-[11px] self-center">
      <div class="w-auto flex flex-col items-center">
        <img src="../../images/Logo admin.png" class="w-[314px] h-[169px]" alt="Logo Lestari">
        <h1 class="text-[32px] font-bold self-center text-center">Atur Ulang Kata Sandi</h1>
      </div>
      
      <div class="flex flex-col form-bg w-[488px] h-auto rounded-lg border-2 border-gray p-6 gap-5">
        <!-- Tampilkan pesan sukses atau error -->
        <?php if (isset($error)): ?>
          <p class="text-red-600 text-center"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="" class="flex flex-col gap-6">
          <label for="email" class="flex flex-col gap-2">
            <span>Email</span>
            <input type="email" name="admin_email" required class="w-full h-10 rounded-lg py-3 px-4 bg-transparent border-2 border-gray" placeholder="Masukkan Email Anda">
          </label>
          <label for="password" class="flex flex-col gap-2">
            <span>Password Baru</span>
            <input type="password" name="password_baru" required class="w-full h-10 rounded-lg py-3 px-4 bg-transparent border-2 border-gray" placeholder="Masukkan Password Baru">
          </label>
          <button type="submit" class="bg-[#009951] h-10 rounded-lg text-base font-bold items-center text-light border-2 border-dark">Kirim</button>
        </form>
        <a href="../login.php" class="bg-[#828282] content-center text-center h-10 rounded-lg text-base font-bold items-center text-light border-2 border-dark">Kembali</a>
      </div>
    </div>
  </div>
</body>
</html>