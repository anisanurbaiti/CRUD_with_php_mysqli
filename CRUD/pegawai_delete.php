<?php 
include "koneksi.php";
   $code =$_GET['id_pegawai'];
   $varDelete = mysqli_query($con, "DELETE FROM tb_pegawai WHERE id_pegawai= '$code'");
        if (!$varDelete) {
     echo "<script>alert('Gagal di hapus'); window.location=('index.php')</script>";
		} else {
       echo "<script>alert('Berhasil Terhapus'); window.location=('index.php')</script>";
	}
?>