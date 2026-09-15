<?php
include "koneksi.php";
$judul = $_REQUEST['judul'];
$deskripsi = $_REQUEST['deskripsi'];
$gambar = $_FILES['gambar'];
$nama_gambar = $gambar['name'];
move_uploaded_file($gambar['tmp_name'], "images/" . $nama_gambar);
$sql = "INSERT INTO projek_portofolio  (judul, deskripsi, gambar) VALUES ('$judul', '$deskripsi', '$nama_gambar')";
mysqli_query($koneksi, $sql);
header("Location: index.php");
exit;
echo $judul;
echo "<br>";
echo $deskripsi;
?>