<?php
	if(isset($_POST['nama_produk']) && isset($_POST['keterangan']) && isset($_POST['harga']) && isset($_POST['jumlah']) && isset($_POST['simpan']))
	{
		include('koneksi.php');

		$id = $_POST['id'];
		$nama_produk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

		$input = mysql_query("UPDATE produk SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah' WHERE id = '$id'") or die(mysql_error());

		if($input){
			echo "DATA BERHASIL DI UPDATE";
			echo "<a href='index.php'>Back</a>";
		}
		else{
			echo "GAGAL MENGUPDATE DATA";
			echo "<a href='index.php'>Back</a>";
		}
	}
	else
	{
		echo "Isikan Semua Data";
		echo "<a href='index.php'>Back</a>";
	}
?>