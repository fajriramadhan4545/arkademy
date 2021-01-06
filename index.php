<!DOCTYPE html>
<html>
<head>
	<title>DATA PRODUK</title>
</head>
<body>
	<h2>Data Produk</h2>
	<p><a href="tambah.php">Tambah Data</a></p>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#ccc">
			<th>No.</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
		<?php
		include("koneksi.php");
		$query = mysql_query("SELECT * FROM produk ORDER BY id DESC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){ ?>
			<tr><td colspan="8">Tidak ada data</td></tr>
		<?php }
		else{ 
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['nama_produk'] ?></td>
				<td><?php echo $data['keterangan'] ?></td>
				<td><?php echo $data['harga'] ?></td>
				<td><?php echo $data['jumlah'] ?></td>
				<td><a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a> <a href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">Hapus</a></td>
			</tr>
		<?php 
		$no++;
	} 
}
		?>
	</table>
</body>
</html>