<?php 	
include('koneksi.php');
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
     table
		{
        	width: 840px;
        	margin: auto;
		}
      h1
		{
        	text-align: center;
      	}
	</style>
</head>
<body>
<?php include('menu.php'); ?>
<h1>Tabel Stok Barang</h1>
<table border="1">
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Barang</th>
			<th>Stok</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['kode_barang']; ?></td>
				<td><?php echo $row['nama_barang']; ?></td>
				<td><?php echo $row['stok']; ?></td>
				<td><?php echo $row['harga_beli']; ?></td>
				<td><?php echo $row['harga_jual']; ?></td>
				<td>
					<a href='edit.php?kd=<?php echo $row['kode_barang'];?>&action=edit'>Edit</a> ||
					<a href='proses.php?kd=<?php echo $row['kode_barang'];?>&action=delete'>Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>