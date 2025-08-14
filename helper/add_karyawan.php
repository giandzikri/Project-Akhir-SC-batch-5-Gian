<?php
include 'koneksi.php';
//mengambil nilai post

$nip           = $_POST['nip'];
$nama_karyawan = $_POST['nama_karyawan'];
$jabatan       = $_POST['jabatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_pekerjaan = $_POST['status_pekerjaan'];
$email         = $_POST['email'];

$query_simpan = "INSERT INTO karyawan (nip, nama_karyawan, jabatan, jenis_kelamin, status_pekerjaan, email) 
				VALUES ('$nip','$nama_karyawan','$jabatan','$jenis_kelamin','$status_pekerjaan','$email') ";

$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
