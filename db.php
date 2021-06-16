<?php
	$db = mysqli_connect("localhost","root","","web_sastra");

	if (isset($_POST['submit'])) {
		$author = $_POST['formNama'];
		$judul	= $_POST['formJudul'];
		$email	= $_POST['formEmail'];
		$isi	= $_POST['formIsi'];
		$jenis	= $_POST['formJenis'];

		$tgl = date("Y-m-d");
		$sql = "INSERT INTO tb_karya VALUES (null, '1', '$jenis', '$author', '$judul', '$isi', '$email', '$tgl', 0)";

		mysqli_query($db, $sql);

		if(mysqli_affected_rows($db) > 0) {
			echo "<script>alert('BERHASIL ditambahkan mohon tunggu di approve :) ')</script>";
		} else {
			echo "<script>alert('GAGAL')</script>";
		}
	}
	// tampil
		$query = "SELECT * FROM tb_karya WHERE valid = 0";
		$hasil = mysqli_query($db, $query);
		while($kumpulanData = mysqli_fetch_assoc($hasil)) {
			$kumpulanPuisi[]= $kumpulanData;
		}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Virgin</title>       
</head>
<body>
	<a href="index.php">Home</a>
	<a href="admin.php">Admin</a>

	<form action="" method="post">
		<input type="radio" name="formJenis" value="1">Puisi
		<input type="radio" name="formJenis" value="2">Cerpen
		<input type="radio" name="formJenis" value="3">Pantun
		<br>
		Nama : <input type="text" name="formNama"> <br>
		Email: <input type="email" name="formEmail"> <br>
		Judul: <input type="text" name="formJudul"> <br>
		Text : <textarea name="formIsi" cols="30" rows="10"></textarea>
		<button name="submit">Submit</button>
	</form>
	<br><br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>id_karya</th>
			<th>id_admin</th>
			<th>id_jenis</th>
			<th>author</th>
			<th>judul</th>
			<th>isi</th>
			<th>email</th>
		</tr>
<?php $i = 1;
	foreach ($kumpulanPuisi as $puisi) {
		echo "<tr>
		<td>" . $puisi["id_karya"] ."</td>
		<td>" . $puisi["id_admin"] ."</td>
		<td>" . $puisi["id_jenis"] ."</td>
		<td>" . $puisi["author"] ."</td>
		<td>" . $puisi["judul"] ."</td>
		<td>" . $puisi["email"] ."</td>
		<td>" . $puisi["tgl_karya"] ."</td>
		<td><pre>" . $puisi["isi"] ."</pre></td>
		</tr>";
	}
?>
	</table>
</body>
</html>