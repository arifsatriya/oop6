<?php 	
include('koneksi.php');
$tampil_edit = $db->tampil_edit($_GET['kd']);
?>

<html>
<head>
	<title></title>
</head>
<body>
<h3>Edit Data Barang</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<table>
	<?php foreach($tampil_edit as $row){ ?>
	<tr>
		<td>Kode Barang</td>
		<td>:</td>
		<td><input type="text" name="kode_barang" readonly
				   value="<?php echo $row['kode_barang'];?>"/></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="nama_barang"
				   value="<?php echo $row['nama_barang'];?>"/></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>:</td>
		<td><input type="text" name="stok"
				   value="<?php echo $row['stok'];?>"/></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td>:</td>
		<td><input type="text" name="harga_beli"
				   value="<?php echo $row['harga_beli'];?>"/></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td>:</td>
		<td><input type="text" name="harga_jual"
				   value="<?php echo $row['harga_jual'];?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/>
		<input type="button" name="batal" value="Batal" 
			   onclick="window.location.href='index.php';"/></td>
	</tr>
	<?php } ?>
</table>
</form>
</body>
</html>