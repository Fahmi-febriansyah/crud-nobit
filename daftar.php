<?php
Require 'fungsi.php';
if (isset($_POST["submit"])) {

if ( daftar($_POST) > 0) {
	echo "<script>
		alert('data berhasil dimasukan');
		document.location.href = 'index.php'
		</script>";
}else{
	echo "data gagal";
}


}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>

<form method="POST" enctype="multipart/form-data">
<div class="conten"><center>
	<div class="pusat">
		<div class="nav">
			<h1>nobit official</h1>
			<img src="nobit.JFIF" class="logo1">	
		</div>
		<div class="uud">
			<table>
				<tr>
					<td>nama clan</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="clan1" id="clan1" placeholder="nama clan" class="pun">
					</td>
				</tr>
				<tr>
					<td>masukan point</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="poin" id="poin" class="pun" placeholder="masukan point">
					</td>
				</tr>
				<tr>
					<td>
						masukan kill
					</td>
				</tr>
				<tr>
					<td><input type="text" name="kill" id="kill" class="pun"></td>
				</tr>
				<tr>
					<td>masukan hasil</td>
				</tr>
				<tr>
					<td><input type="text" name="hasil" id="hasil"></td>
				</tr>
				<tr>
					<td><input type="file" name="gambar" id="gambar"></td>
				</tr>
				<tr>
					<td>
						<button type="submit" name="submit">kirim</button>
					</td>
				</tr>
			</table>

		</div>
	</div></center>
</div></form>
</body>
</html>