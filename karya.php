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
			echo "<script>alert('Terima Kasih sudah mengirimkan karyamu pada SahabatSastra, tunggu kami memproses karya indah mu ya :)')</script>";
		} else {
			echo "<script>alert('Maaf, karyamu gagal terkirim :( Silahkan coba ulang')</script>";
		}
	}
	
	// tampil
		$query = "SELECT * FROM tb_karya WHERE valid = 0";
		$hasil = mysqli_query($db, $query);
		while($kumpulanData = mysqli_fetch_assoc($hasil)) {
			$kumpulanPuisi[]= $kumpulanData;
		}	

	// CARI
	if( isset($_POST["cari"]) ) {
	$keyword = $_POST["keyword"];
	header("location:cari.php?key=$keyword");
}	

	// komentar
	if( isset($_POST["cari"]) ) {
	$keyword = $_POST["keyword"];
	header("location:cari.php?key=$keyword");
	}	

    if (isset($_POST['komenBtn'])) {
        $email = $_POST['email'];
        $isi = $_POST['isi'];
        mysqli_query($db,"INSERT INTO `komentar` (`id`, `email`, `tanggal`, `isi`) VALUES (NULL, '$email', NOW(), '$isi')  ");
    }

    $listKomentar = [];
    $komentarQuery = mysqli_query($db, "SELECT * FROM komentar ORDER BY id DESC LIMIT 5 ");
    while ($resultQuery = mysqli_fetch_assoc($komentarQuery)) {
        $listKomentar[] = $resultQuery;
	}
	

	$listPuisi = [];
	$puisiQuery =  mysqli_query($db, "SELECT * FROM tb_karya WHERE valid = 1");
	while ($resultPuisiQuery = mysqli_fetch_assoc($puisiQuery)) {
        $listPuisi[] = $resultPuisiQuery;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang di SahabatSastra</title>      
    <link rel="stylesheet" href="style1.css">
</head>
<body background="diagmonds_@2X.png">
	<div id="gambar_header">
		<nav>
			<ul class="nav_links" style="float: left; margin-left: 50px;">
				<a href="login.php" id="about">Login Admin</a>
				
			</ul>
			<ul class="nav_links">
				<a href="tentang.php" id="about">Sahabat Sastra</a>
			</ul>
		</nav>
	</div>		
	
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="sejarah.php">Sejarah</a></li>
		<li><a href="karya.php">Karya</a></li>
		<li><a href="pustaka.php">Pustaka</a></li>
	</ul>

	<div id="isi">
<!-- BAGIAN KIRI -->
        <div class="kiri" style="margin: 0 15px 0px 30px">
        
				<div class="kotak_link">
					<div id="teks_judul">
						<h2>Kirimkan Karyamu</h2>
					</div>
					<form action="" method="post">
						<p class="teks_isi" style="text-indent: 0%;">
							Kirim tulisanmu pada kami dan biarkan mereka menikmati karya indahmu :) <br>
							Sahabat Sastra menerima tulisan berupa Puisi, Cerpen dan Pantun. <br>
							Semangat menulis dan jangan bosan membaca ya...<br>
							Salam! 
						<br> <br>
						<input type="radio" name="formJenis" value="1">Puisi
						<input type="radio" name="formJenis" value="2">Cerpen
						<input type="radio" name="formJenis" value="3">Pantun
						<br><br>
						Nama <br><input type="text" name="formNama" placeholder="Nama penulis"> <br><br>
						Email <br><input type="email" name="formEmail" placeholder="Nama@gmail.com"> <br><br>
						Judul  <br> <input type="text" name="formJudul" placeholder="Judul karya"> <br><br>
						Text  <br><textarea name="formIsi" cols="30" rows="10" placeholder="Isi karya"></textarea><br>
						<button name="submit">Submit</button>
					</p>
					</form>
					<br><br>
                </div>
                	
		</div>
		
		<hr style="border: 1px black height: 1000px; margin: 20px 10px 20px 10px">
<!-- BAGIAN KANAN -->
		<div id="kanan" >
			<!-- CARI -->
			<form action="" method="POST" style="margin: 30px 20px 10px 20px;">
				<input name="keyword" placeholder="Cari..." style="width: 80%;">	
				<button name="cari">Cari</button>
			</form>
			
			<!-- MUSIK -->
			<div class="music_playlist">
				<select name="pilih">
					<option value="Banda-Neira-Rindu-Lirik_HGnN_0hOfuM.mp3">Banda Neira - Rindu</option>
					<option value="Banda-Neira-Hujan-di-Mimpi-lyrics-video_NayaLarRS7w.mp3">Banda Neira - Hujan di Mimpi</option>
					<option value="Banda Neira - Sampai Jadi Debu ( Indie ).mp3">Banda Neira - Sampai Jadi Debu</option>
					<option value="Banda Neira -  Yang Patah Tumbuh, yang Hilang Berganti.mp3">Banda Neira -  Yang Patah Tumbuh, yang Hilang Berganti
					</option>
				</select>
				<audio controls autoplay="">
                   <source src="" type="audio/mpeg">
               </audio>
			</div>

			<!-- VIDEO -->
			<div class="right">
				<div>
					<video width="270" control>
						<source src="aadc.mp4" autoplay="true" type="video/mp4">
					</video>
				</div>

				<div>
					<video width="270" control>
						<source src="Sampai Jadi Debu.mp4" autoplay="true" type="video/mp4">
					</video>
				</div>
				
			</div>
			
			<!-- Komentar-->
			<form action="" method="POST" style="margin: 20px 20px 10px 40px;">
		        <input type="text" name="email" placeholder="Masukkan email anda...">
		        <br>
		        <textarea name="isi" cols="27" rows="10" placeholder="Masukkan komentar anda..."></textarea>
		        <button type="submit" name="komenBtn">Submit</button>
		    </form>
		    <br>
		    <div class="list-komentar">
		        <?php 
		            foreach ($listKomentar as $row) {
		                echo "<div class='header-komentar'>
		                 Email : ". $row['email'] ."
		                 <span> <br>
		                 date : ". $row['tanggal'] ."
		                 <span>
		                </div>
		                <div class='isi-komentar'>
		                ". $row['isi'] ."
		                </div>";
		            }
		        ?>  
		    </div>
		</div>
				   		
	</div>	

	<footer> &copy; Copyrighted virginia_novera</footer>
</body>
<script>
	let select = document.querySelector("select");
	let source = document.querySelector("source");
	let audio = document.querySelector("audio");
	select.addEventListener("change", ()=>{
		source.setAttribute("src", select.value);
		audio.load();
	})
</script>
</html>