<?php
$db = mysqli_connect("localhost","root","","web_sastra");

    $id = $_GET['id'];

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
    
    $query = mysqli_query($db,"SELECT * FROM tb_karya WHERE id_karya = $id");
    $res = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang di SahabatSastra</title>       
    <link rel="stylesheet" href="style1.css">
</head>

<style>
    textarea{
        border: none;
        text-align: center;
    }
</style>
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
                    <?php 
                        echo "
                        <div id='teks_judul' >
						<h2>".$res['judul']."</h2>
						<p style='text-align: center; color: gray; font-size: 19px;'> By ".$res['author']." | ".$res['tgl_karya']." </p>

						<p class='teks_isi' style='text-indent: 0%;'>
							".$res['isi']."
                        </p>
                        
                        </div>
                        ";
                    ?>

						
                </div>
                	
		</div>
		
		<hr style="border: 1px black ;height: 1000px; margin: 20px 10px 20px 10px">
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
						<source src="vidio2.mp4" autoplay="true" type="video/mp4">
					</video>
				</div>

				<div>
					<video width="270" control>
						<source src="vdio1.mp4" autoplay="true" type="video/mp4">
					</video>
				</div>
				
			</div>
			
			<!-- Komentar-->
			<form action="" method="POST" style="margin: 20px 20px 10px 40px;">
		        <input type="text" name="email" placeholder="Masukkan email anda...">
		        <br>
		        <textarea name="isi" cols="27" rows="10" style="border: 1px solid; text-align: left;" placeholder="Masukkan komentar anda..."></textarea>
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