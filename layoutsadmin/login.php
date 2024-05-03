<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <!-- Content form untuk login pengguna -->
    <div class="login-container">
        <h2>Login</h2>
        <form action="../controllerslayoutadmin/proses_login.php" class="form-login" method="POST" style="margin: 10px;">
            <h3>Login Akun Admin Informasi</h3>
            <label for="username">Username *</label>
            <input type="text" id="username" name="username" required>
            <label for="password" style="margin-top: 10px;">Password *</label>
            <input type="password" id="password" name="password" required>
            <div class="button-center">
            <button type="submit" 
            ="btn btn-submit" style="margin-top: 10px; ">Login</button>
        </div>
    </form>
    </div>
    <!-- End content form untuk login pengguna -->
</body>
</html>
