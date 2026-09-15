<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet"
    href="style.css">
</head>
<body>
<div class="admin-container">
    <h1>Halaman Admin</h1>
    <a href="form_input.php">Tambah Projek</a>
    <a href="index.php">Lihat Portofolio</a>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
<?php
} else {
    header("Location: login.php");
    exit;
}
?>