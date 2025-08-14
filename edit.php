<?php
    include "helper/koneksi.php";
    $id = $_POST['id'];
    $query_tampil = "SELECT * FROM karyawan WHERE id = '$id'";
    $tampil = mysqli_query($db, $query_tampil);
    $data = mysqli_fetch_array($tampil)
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Edit Data karyawan</h4>
                        <a href="index.php" class="btn btn-light btn-sm">Kembali</a>
                    </div>
                    <div class="card-body p-4">
                        <form action="helper/update_karyawan.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data ['id'] ?>">
                            <div class="mb-3">
                                <label for="nip" class="form-label" >nip</label>
                                <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data['nip']?>"  required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_karyawan" class="form-label">Nama </label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?php echo $data['nama_karyawan']?>"  required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label"> jabatan </label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $data['nama_karyawan']?>"  required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="laki-laki" value="Laki-laki" name="jenis_kelamin" <?php if ($data['jenis_kelamin'] == "Laki-Laki") echo "checked"  ?>  required>
                                    <label class="form-check-label" for="laki-laki">Laki-laki </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="perempuan" value="Perempuan" value="Laki-laki" name="jenis_kelamin" <?php if ($data['jenis_kelamin'] == "Perempuan") echo "checked" ?>  required>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Tetap" value="Tetap" name="status_pekerjaan" <?php if ($data['status_pekerjaan'] == "Tetap") echo "checked"  ?>  required>
                                    <label class="form-check-label" for="Tetap">Tetap</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Kontrak" value="Kontrak" name="status_pekerjaan" <?php if ($data['status_pekerjaan'] == "Kontrak") echo "checked" ?>  required>
                                    <label class="form-check-label" for="Kontrak">Kontrak</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Magang" value="Magang" name="status_pekerjaan" <?php if ($data['status_pekerjaan'] == "Magang") echo "checked" ?>  required>
                                    <label class="form-check-label" for="Magang">Magang</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="text" class="form-control" id="email" value="<?php echo $data['email']?>" name="email" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>