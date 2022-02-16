<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "server01@";
	var $database = "oop6";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_barang");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($kode_barang,$nama_barang,$stok,$harga_beli,$harga_jual)
	{
		mysqli_query($this->koneksi,"insert into tb_barang values ('$kode_barang','$nama_barang','$stok','$harga_beli','$harga_jual')");
	}
	
	function hapus_data($kd)
	{
		mysqli_query($this->koneksi,"DELETE FROM tb_barang WHERE kode_barang='$kd'");
	}
	
	function tampil_edit($kd)
	{
		$data = mysqli_query($this->koneksi,"select * from tb_barang where kode_barang='$kd'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	
	function edit_data($kode_barang,$nama_barang,$stok,$harga_beli,$harga_jual)
	{
		mysqli_query($this->koneksi,"UPDATE tb_barang SET nama_barang='$nama_barang', stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE kode_barang='$kode_barang' ");
	}
}
$db = new database();
?>