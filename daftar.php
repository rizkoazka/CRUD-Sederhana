<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pendaftaran Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="row" style="margin: 150px;">
            <div class="card mx-5" style="padding: 50px; padding-left: 100px; padding-right:100px;">
                <div style="margin-bottom: 20px;text-align: center;">
                    <h2>Formulir Pendaftaran</h2>
                </div>
                <form action="pendaftaran.php" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">No. HP</label>
                        <input type="text" class="form-control" id="nohp" name="nohp">
                    </div>
                    <div class="text-center">
                        <button style="padding: 5px 25px;" type=" submit" name="daftar" class="btn btn-primary">Register</button>
                    </div>
                    <div>
                        <a style="margin-right: 750px; padding: 5px 25px;" class=" btn btn-success" href="index.php" role="button">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>