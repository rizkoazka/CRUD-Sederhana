<?php
$conn = mysqli_connect("localhost", "root", "", "db_coba");

if ($conn) {
    echo "Koneksi Berhasil";
} else {
    echo "Koneksi Gagal!" . mysqli_connect_error();
    die();
}
