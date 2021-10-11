<?php

include("config.php");

// cek apakah tombol daftar sudah diketik atau belum ?
if (isset($_POST['daftar'])) {

    //ambil data dari formulir 
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    // buat query
    $sql = "INSERT INTO mahasiswa (nama, jurusan) VALUE ('$nama', '$jurusan')";
    $query = mysqli_query($db, $sql);

    // apakah query sudah tersimpan apa belum
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang !!!");
}
