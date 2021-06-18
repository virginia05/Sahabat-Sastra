<?php 
$db = mysqli_connect("localhost","root","","web_sastra");
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
					<div id="teks_judul" >
						<h2>Tanya Rindu Ke Siapa???</h2>
						<p style="text-align: center; color: gray; font-size: 19px;"> By Gusti Aditia | 2018-04-21 </p>

						<p class="teks_isi" >
                            Dalam bumi yang berwarna pudar. <br> 
							Ada seorang anak lelaki yang akan tumbuh besar. <br>
							Perjuangan melawan lara di tengah keramaian hari-hari kota. Kian bersiap untuk yang akan datang itu, kelak.<br> 
							Banyak orang bilang; tubuhku katanya seperti pohon beringin yang besar, kekar, tegak. <br>
							Sayangnya... sepohon beringin, tetap saja punya kelemahan tersendiri.<br>
							Kini, tepat di mana hari malam semakin gelap, dan untung saja tak bergulita. Karnanya Zaman berbeda sudah. Zaman di mana Ibu dan Bapakku pacaran, pastinya kata dari gelap tentunya gelap gulita. Tetapi sekarang berbeda Zaman, gelap bukan lagi gulita; tetapi Aku gelap tanpamu Ibu-Bapak, sekarang. yang lebih dari gulita. Kuharap pagi nanti. Tanpa tanpaan tanpa rindumu-ku-bu.<br>
							Tanpaan tanpa, aku berusaha menghidupkan dan mencari walau menjadi tanda tanya untuk dicari, sinar di jalan, di ruang, di lampu, bahkan di bola mata, pelangi di lampu jalan mungkin...<br>
							Semoga tanpa ada gulita.<br>
							Tetali bilang gulita adanya gelap tanpanya..<br>
							Tanda, rindu bisa saja merindu???<br>
							Yha... Lara. Gelap, gulita, rindu,<br>
							Ada yang berbeda???<br>
							Bagai kualitas rindu tetap juara dan unggul begitu, juara!!!<br>
							Kenapa ini??? Aku bertanya kepada Ibu nanti, biar tak ada jawaban. Aku ingin tidur terlebih dahulu, agar tau jawabannya di mimpi. Ku rasa Ibu bisa menjawabnya...<br><br>
						</p>
					</div>	
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
						<source src="Sampai Jadi Debu.mp4" autoplay="true" type="video/mp4">
					</video>
				</div>

				<div>
					<video width="270" control>
						<source src="aadc.mp4" autoplay="true" type="video/mp4">
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