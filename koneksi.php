<?php
$koneksi =
mysqli_connect("localhost",
"root", "", "db_portofolio");
if (!$koneksi) {
    die("koneksi  gagal: " .
mysqli_connect_error());
}
?>