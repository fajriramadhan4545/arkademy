<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Produk</title>
</head>
<body>
	<h2>Edit Data Produk</h2>
	<p><a href="index.php">Home</a></p>
	<?php 
	include("koneksi.php");
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM produk WHERE id = '$id'");
	if(mysql_num_rows($show) == 0){
		echo "<script>window.history.back()</script>";
	}
	else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NAMA PRODUK</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nama_produk']; ?>" name="nama_produk" required></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['keterangan']; ?>" name="keterangan" size="50" required></td>
			</tr>
			<tr>
				<td>HARGA</td>
				<td>:</td>
				<td>
					<textarea name="harga" cols="30" rows="4" required><?php echo $data['harga']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>JUMLAH</td>
				<td>:</td>
				<td>
					<input type="text" value="<?php echo $data['jumlah']; ?>" name="jumlah" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="Simpan" name="simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>