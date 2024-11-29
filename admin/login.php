<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/styles.css" rel="stylesheet">
  <title>Masuk | Admin Lestari</title>
</head>
<body>
  <div class="flex justify-center bg-gradient-to-b from-green-admin to-dark-green-admin w-full h-screen p-[34px]">
    <div class="flex flex-col items-center bg-light w-[622px] h-auto rounded-[114px] py-[75px] px-[15px] text-dark gap-[21px] self-center">
      <div>
        <img src="../images/Logo admin.png" class="w-[314px] h-[169px]" alt="Logo Lestari">
        <h1 class="text-[32px] font-bold self-center text-center">Admin Login</h1>
      </div>
      
      <h2 class="text-[26px] font-light">Lestari</h2>
      <div class="flex flex-col form-bg w-[488px] h-auto rounded-lg border-2 border-gray p-6 gap-3">
        <form action="./auth.php" method="POST" class="flex flex-col gap-6">
          <label for="admin_email" class="flex flex-col gap-2">
            <span>Email</span>
            <input type="email" id="admin_email" name="admin_email" class="w-full h-10 rounded-lg py-3 px-4 bg-transparent border-2 border-gray" placeholder="Email">
          </label>
          <label for="admin_password" class="flex flex-col gap-2">
            <span>Password</span>
            <input type="password" id="admin_password" name="admin_password" class="w-full h-10 rounded-lg py-3 px-4 bg-transparent border-2 border-gray" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password">
          </label>
          <button type="submit" class="bg-[#009951] h-10 rounded-lg text-base font-bold items-center text-light border-2 border-dark">Masuk</button>
        </form>
        <a href="./password-reset/" class="underline self-end">Forgot password?</a>
      </div>
    </div>
  </div>
</body>
</html>