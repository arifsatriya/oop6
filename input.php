<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Barang</h3>
<hr/>
<form method="post" action="proses.php?action=add">
<table>
	<tr>
		<td>Kode Barang</td>
		<td>:</td>
		<td><input type="text" name="kode_barang"/></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="nama_barang"/></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>:</td>
		<td><input type="text" name="stok"/></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td>:</td>
		<td><input type="text" name="harga_beli"/></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td>:</td>
		<td><input type="text" name="harga_jual"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/>
		<input type="button" name="batal" value="Batal" 
			   onclick="window.location.href='index.php';"/></td>
	</tr>
</table>
</form>
</body>
</html>