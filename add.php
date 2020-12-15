<?php
include "koneksi.php";

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$angkatan = $_POST["angkatan"];
$prodi = $_POST["prodi"];

$conn = koneksi();

$query = "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$angkatan', '$prodi'";

$hasil = mysqli_query($conn, $query);
