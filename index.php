<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login System</title>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Selamat Datang</h1>
            <p>Silakan masuk ke akun Anda</p>
        </div>
        
        <?php if (!empty($login_message)): ?>
            <div class="message <?php echo $message_class; ?>">
                <?php echo $login_message; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Masukkan username Anda">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Masukkan password Anda">
            </div>
            
            <button type="submit" class="login-button">MASUK</button>
        </form>
        
        <div class="footer-links">
            <a href="#">Lupa password?</a> | <a href="#">Daftar akun baru</a>
        </div>
    </div>
</body>
</html>