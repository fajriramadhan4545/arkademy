<!DOCTYPE html>
<html>
<head>
	<title>Tambah DATA PRODUK</title>
</head>
<body>
	<h2>Tambah Data Produk</h2>
	<p><a href="index.php">Home</a></p>

	<form action="tambah-proses.php" method="post">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NAMA PRODUK</td>
				<td>:</td>
				<td><input type="text" name="nama_produk" required></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td>:</td>
				<td><input type="text" name="keterangan" size="50" required></td>
			</tr>
			<tr>
				<td>HARGA</td>
				<td>:</td>
				<td>
					<textarea name="harga" cols="30" rows="4" required></textarea>
				</td>
			</tr>
			<tr>
				<td>JUMLAH</td>
				<td>:</td>
				<td>
					<input type="text" name="jumlah" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="TAMBAH" name="tambah">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>