<?php
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$judul                  = $_POST['IDbuku'];
$penulis                = $_POST['IDuser'];
$penerbit               = $_POST['nama'];
$tahunterbit            = $_POST['tgl_peminjaman'];
$foto                   = $_POST['tgl_pengembalian'];
$buku                   = $_POST['status_peminjaman'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into peminjaman(IDbuku,IDuser,nama,tgl_peminjaman,tgl_pengembalian,status_peminjaman) 
									values('$IDbuku','$IDuser','$nama','$tgl_peminjaman','$tgl_pengembalian','$status_peminjaman')");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
?>