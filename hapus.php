<?php 
	if(isset($_GET['id'])){
		include("koneksi.php");

		$id = $_GET['id'];

		$cek = mysql_query("SELECT id FROM produk WHERE id = '$id'") or die(mysql_error());

		if(mysql_num_rows($cek) == 0){
			echo "<script>window.history.back()</script>";
		}
		else{
			$del = mysql_query("DELETE FROM produk WHERE id = '$id'");

			if($del){
				echo "BERHASIL MENGHAPUS DATA";
				echo "<a href='index.php'>Back</a>";
			}
			else{
				echo "GAGAL MENGHAPUS DATA";
				echo "<a href='index.php'>Back</a>";
			}
		}
	}
?>