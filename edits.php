<?php

include("config.php");

// cek apakah tombol daftar sudah diketik atau belum ?
if (isset($_POST['daftar'])) {

    //ambil data dari formulir 
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nim = $_POST['nim'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];

    // buat query
    $sql = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', nim='$nim', jeniskelamin='$jeniskelamin', alamat='$alamat', nohp='$nohp' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query sudah tersimpan apa belum
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list.php');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Gagal Menyimpan Perubahan');
    }
} else {
    die("Akses dilarang !!!");
}
