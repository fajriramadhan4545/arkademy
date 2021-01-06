<?php
	if(isset($_POST['nama_produk']) && isset($_POST['keterangan']) && isset($_POST['harga']) && isset($_POST['jumlah']) && isset($_POST['tambah']))
	{
		include('koneksi.php');

		$nama = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

		$input = mysql_query("INSERT INTO produk VALUES(NULL, '$nama', '$keterangan', '$harga', '$jumlah')") or die(mysql_error());

		if($input){
			echo "DATA BERHASIL DITAMBAHKAN";
			echo "<a href='tambah.php'>Back</a>";
		}
		else{
			echo "GAGAL MENAMBAHKAN DATA";
			echo "<a href='tambah.php'>Back</a>";
		}
	}
	else
	{
		echo "Isikan Semua Data";
		echo "<a href='tambah.php'>Back</a>";
	}
?>