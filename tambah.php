<?php 
    include "helper/koneksi.php";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <!-- Card wrapper -->
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-success text-white text-center rounded-top-4">
          <h4 class="mb-0">Form Tambah Karyawan</h4>
        </div>

        <div class="card-body p-4">
          <form action="helper/add_karyawan.php" method="POST">

            <div class="mb-3">
              <label class="form-label fw-semibold">NIP</label>
              <input type="text" name="nip" class="form-control rounded-3" placeholder="Masukkan NIP" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Nama</label>
              <input type="text" name="nama_karyawan" class="form-control rounded-3" placeholder="Masukkan Nama" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Jabatan</label>
              <input type="text" name="jabatan" class="form-control rounded-3" placeholder="Masukkan Jabatan" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-select rounded-3" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Status Pekerja</label>
              <select name="status_pekerjaan" class="form-select rounded-3" required>
                <option value="">-- Pilih --</option>
                <option value="Tetap">Tetap</option>
                <option value="Kontrak">Kontrak</option>
                <option value="Magang">Magang</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Email</label>
              <input type="email" name="email" class="form-control rounded-3" placeholder="nama@email.com" required>
            </div>

            <!-- Tombol submit -->
            <div class="d-flex justify-content-between">
              <a href="index.php" class="btn btn-secondary rounded-3 px-4">Batal</a>
              <button type="submit" name="simpan" class="btn btn-success rounded-3 px-4">Simpan</button>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
