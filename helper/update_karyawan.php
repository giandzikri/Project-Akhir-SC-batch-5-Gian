<?php
include 'koneksi.php';

//mengambil Nilai Post
$id = $_POST['id'];
$nip = $_POST['nip'];
$nama_karyawan = $_POST['nama_karyawan'];
$jabatan = $_POST['jabatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_pekerjaan = $_POST['status_pekerjaan'];
$email = $_POST['email'];

//query 
$query_update = "UPDATE karyawan SET 

				nip='$nip',
				nama_karyawan='$nama_karyawan',
				jabatan='$jabatan',
				jenis_kelamin='$jenis_kelamin',
				status_pekerjaan='$status_pekerjaan',
				email='$email'
				WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
