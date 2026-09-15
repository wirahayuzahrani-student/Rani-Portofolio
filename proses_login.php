<?php
session_start();
$username = $_POST ['username'];
$password = $_POST ['password'];
if ($username == "rani" && $password == "1234") {
    $_SESSION['login'] = true;
    if (isset($_POST['remember'])) {
        setcookie("username", 
        $username, time() + (7 * 24 * 60 * 60));
    }
    header("Location: halaman_admin.php");
    exit;
} else {
    echo "<link rel='stylesheet'
    href='style.css'>";
    echo "<div class='error-container'>";
    echo "<p 
    class='login-error'>Username atau password salah.</p>";
    echo "<a  href='login.php' class='back-button'>Kembali</a>";
    echo "</div>";
}
?>