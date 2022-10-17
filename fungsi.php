<?php 
$koneksi = mysqli_connect("localhost","root","","scrim");


function kuari($kue){
	global $koneksi;

	$result = mysqli_query($koneksi,$kue);
	$data = mysqli_query($koneksi,$kue);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[]= $row;
	} 
	return $rows;
}

function daftar($dapat){
	global $koneksi;
	$clan1 = htmlspecialchars($dapat["clan1"]);
	$poin = htmlspecialchars($dapat["poin"]);
	$kill = htmlspecialchars($dapat["kill"]);
	$hasil = htmlspecialchars($dapat["hasil"]);

	$query = "INSERT INTO daftar
	VALUES
	('','$clan1','$poin','$kill','$hasil')";
	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);

}

function upload(){

	$namafiles = $_FILES['gambar']['name'];
	$size = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tempat = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "masukin gambar";
		return false;
}

}
function cari($keyword){
	$query = "SELECT * FROM daftar WHERE clan1 like '%$keyword%'";

	 return kuari($query);
}


 ?>
