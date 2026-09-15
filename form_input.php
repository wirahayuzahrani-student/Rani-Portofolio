<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
} else {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Tambah Proyek</title>
        <link rel="stylesheet" 
        href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Tambah Proyek</h1>
    <form action="simpan_data.php"
    method="post" enctype="multipart/form-data">
    <label>Judul Proyek</label>
    <input type="text" name="judul">
    <label>Deskripsi Proyek</label>
    <textarea name="deskripsi"></textarea>
    <label>Gambar Proyek</label>
    <input  type="file" name="gambar">
    <button type="submit">simpan Proyek</button>
    </form>
    </div>
</body>
</html>