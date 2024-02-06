
<?php
include "koneksi.php";   
$varName	= $_POST['nama'];
$varEmail	= $_POST['email'];
$varAlamat	= $_POST['alamat'];
$varNoTelp	= $_POST['no_telepone'];
$varString	= $varName;
$varLength	= strlen($varString);
$cekName	= mysqli_num_rows(mysqli_query($con,"SELECT * from tb_pegawai where nama='$varName'"));
if ($cekName > 0 ){
	echo"<script>alert('DATA TIDAK BOLEH SAMA');window.location.href='index.php';</script>";
}
else if($varName == ""){
	echo"<script>alert('DATA TIDAK BOLEH KOSONG');window.location.href='index.php';</script>";
}
else if($varLength<3){
	echo"<script>alert('NAMA KURANG PANJANG');window.location.href='index.php';</script>";
}
else if($varLength>70){
	echo"<script>alert('NAMA TERLALU PANJANG');window.location.href='index.php';</script>";
}
else{
	$hasil	= mysqli_query($con,"INSERT INTO tb_pegawai (nama,email,alamat,no_telepone) VALUES('$varName','$varEmail','$varAlamat','$varNoTelp')");
	if(!$hasil){
		die("GAGAL");
	}else{
		echo "<script>alert('Berhasil Tersimpan'); window.location=('index.php')</script>";
	}
}
?>


