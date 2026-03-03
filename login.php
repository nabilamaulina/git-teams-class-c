<?php
session_start();

// Data login sederhana (hardcoded)
$username_benar = "admin";
$password_benar = "12345";

$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $username_benar && $password == $password_benar) {
        $_SESSION["login"] = true;
        $pesan = "Login berhasil! Selamat datang, $username.";
    } else {
        $pesan = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Git Teams Class C</title>
</head>
<body>

<h2>Form Login</h2>

<?php if ($pesan != ""): ?>
    <p><strong><?php echo $pesan; ?></strong></p>
<?php endif; ?>

<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<?php include 'footer.php'; ?>

</body>
</html>