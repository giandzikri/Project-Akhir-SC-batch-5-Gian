<?php 
include "helper/koneksi.php";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>

    body {
      background-color: #f8f9fa;
    }
    .table-card {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 25px rgba(0,0,0,0.05);
    }
    .table-dark-custom {
      background: linear-gradient(90deg, #343a40, #495057);
      color: #fff;
    }
  </style>
</head>
<body>
<div class="container py-5">
  <h1 class="mb-4 text-center fw-bold">Data Karyawan</h1>

  <div class="d-flex justify-content-end mb-3">
    <a href="tambah.php" class="btn btn-primary rounded-3">
      <i class="bi bi-plus-circle me-1"></i> Tambah Karyawan
    </a>
  </div>

  <div class="card table-card">
    <div class="table-responsive">
      <table class="table table-hover table-striped align-middle mb-0">
        <thead class="table-dark-custom">
          <tr class="text-center">
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th>Email</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $query_tampil = "SELECT * FROM karyawan";
          $tampil = mysqli_query($db, $query_tampil);
          while ($data = mysqli_fetch_array($tampil)) {
          ?>
          <tr>
            <td class="text-center"><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($data['nip']); ?></td>
            <td><?php echo htmlspecialchars($data['nama_karyawan']); ?></td>
            <td><?php echo htmlspecialchars($data['jabatan']); ?></td>
            <td><?php echo htmlspecialchars($data['jenis_kelamin']); ?></td>
            <td>
              <?php 
                $status = $data['status_pekerjaan'];
                $badge = ($status=="Tetap")?"success":(($status=="Kontrak")?"warning":"info");
              ?>
              <span class="badge bg-<?php echo $badge; ?>">
                <?php echo htmlspecialchars($status); ?>
              </span>
            </td>
            <td><?php echo htmlspecialchars($data['email']); ?></td>
            <td class="text-center">
              <div class="d-flex justify-content-center gap-2">
                <form action="edit.php" method="POST" class="m-0">
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <button type="submit" class="btn btn-warning btn-sm rounded-3">
                    <i class="bi bi-pencil-square"></i>
                  </button>
                </form>

                <button class="btn btn-danger btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id']; ?>">
                  <i class="bi bi-trash"></i>
                </button>
              </div>

              <form action="helper/delete_karyawan.php" method="POST" class="m-0">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapus<?php echo $data['id']; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data ini?<br>
                        <strong><?php echo htmlspecialchars($data['nama_karyawan']); ?></strong>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
