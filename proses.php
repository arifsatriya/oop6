<?php 
include('koneksi.php');

$action = $_GET['action'];
if($action == "add")
{
	$db->tambah_data($_POST['kode_barang'],$_POST['nama_barang'],
						  $_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);
	header('location:index.php');
}
elseif($action == "delete")
{
	$db->hapus_data($_GET['kd']);
	header('location:index.php');
}
elseif($action == "update")
{
	$db->edit_data($_POST['kode_barang'],$_POST['nama_barang'],
						  $_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);
	header('location:index.php');
}
?>