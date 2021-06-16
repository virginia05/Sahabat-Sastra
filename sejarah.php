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
						<p class="teks_isi" style="text-indent: 0%;">
							<img src="p1.jpg" style="float: left; margin: 25px 15px 0 0; width: 250px; height: 310px;">
							
							<p style="text-align: justify; margin: 0 30px; font-size: 19px;">Sastra Indonesia adalah sebuah istilah yang melingkupi berbagai macam karya sastra di Asia Tenggara. Istilah "Indonesia" sendiri mempunyai arti yang saling melengkapi terutama dalam cakupan geografi dan sejarah politik di wilayah tersebut. 
							Sastra Indonesia sendiri dapat merujuk pada sastra yang dibuat di wilayah Kepulauan Indonesia. Sering juga secara luas dirujuk kepada sastra yang bahasa akarnya berdasarkan Bahasa Melayu (di mana bahasa Indonesia adalah satu turunannya). Dengan pengertian kedua maka sastra ini dapat juga diartikan sebagai sastra yang dibuat di wilayah Melayu (selain Indonesia, terdapat juga beberapa negara berbahasa Melayu seperti Malaysia dan Brunei), demikian pula bangsa Melayu yang tinggal di Singapura. Sastra Indonesia memiliki periodisasi, sebagai berikut: <br><br>
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">PERIODISASI</p><br>
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Sastra Indonesia terbagi menjadi 2 bagian besar, yaitu: <br>
								•	Lisan<br>
								•	Tulisan<br><br>
								Secara urutan waktu maka sastra Indonesia terbagi atas beberapa angkatan: <br>
								1)	Angkatan Pujangga Lama<br>
								2)	Angkatan Sastra Melayu Lama<br>
								3)	Angkatan Balai Pustaka (1920-1932)<br>
								4)	Angkatan Pujangga Baru (1933-1942)<br>
								5)	Angkatan 1945 (1942-1949)<br>
								6)	Angkatan 1950–1960-an<br>
								7)	Angkatan 1966–1970-an<br>
								8)	Angkatan 1980–1990-an<br>
								9)  Angkatan Reformasi<br>
								10) Angkatan 2000-an<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							1. Pujangga Lama</p><br>
							<img src="s22.jpg" style="float: right; margin: 0 30px 0 15px; width: 250px; height: 320px;">
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Pujangga lama merupakan bentuk pengklasifikasian karya sastra di Indonesia yang dihasilkan sebelum abad ke-20. Pada masa ini karya sastra di dominasi oleh syair, pantun, gurindam dan hikayat. Di Nusantara, budaya Melayu klasik dengan pengaruh Islam yang kuat meliputi sebagian besar negara pantai Sumatra dan Semenanjung Malaya. Di Sumatra bagian utara muncul karya-karya penting berbahasa Melayu, terutama karya-karya keagamaan. Hamzah Fansuri adalah yang pertama di antara penulis-penulis utama angkatan Pujangga Lama. Dari istana Kesultanan Aceh pada abad XVII muncul karya-karya klasik selanjutnya, yang paling terkemuka adalah karya-karya Syamsuddin Pasai dan Abdurrauf Singkil, serta Nuruddin ar-Raniri. Dibawah ini beberapa Karya Sastra Pujangga Lama :<br><br>
								Sejarah:<br>
								•	Sejarah Melayu (Malay Annals)<br>
								•	Tuhfat al-Nafis (Bingkisan Berharga) karya Raja Ali Haji<br><br>
								Hikayat:<br>
								•	Hikayat Abdullah<br>
								•	Hikayat Aceh<br>
								•	Hikayat Amir Hamzah<br>
								•	Hikayat Raja-raja Pasai<br><br>
								Syair:<br>
								•	Syair Bidasari<br>
								•	Syair Hukum Nikah karya Raja Ali Haji<br>
								•	Syair Ken Tambuhan<br>
								•	Syair Raja Siak<br><br>
								Gurindam:<br>
								•	Gurindam Dua Belas karya Raja Ali Haji<br><br>
								Kitab agama:<br>
								•	Syarab al-'Asyiqin (Minuman Para Pecinta) oleh Hamzah Fansuri<br>
								•	Asrar al-'Arifin (Rahasia-rahasia para Gnostik) oleh Hamzah Fansuri<br>
								•	Nur ad-Daqa'iq (Cahaya pada kehalusan-kehalusan) oleh Syamsuddin Pasai<br>
								•	Bustan as-Salatin (Taman raja-raja) oleh Nuruddin ar-Raniri<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							2. Sastra Melayu Lama</p><br>
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Karya sastra di Indonesia yang dihasilkan antara tahun 1870 - 1942, yang berkembang dilingkungan masyarakat Sumatra seperti "Langkat, Tapanuli, Minangkabau dan daerah Sumatra lainnya", orang Tionghoa dan masyarakat Indo-Eropa. Karya sastra pertama yang terbagit sekitar tahun 1870 masih dalam bentuk syair, hikayat dan terjemahan novel barat.<br><br>
								Beberapa Karya Sastra Melayu Lama :<br>
								•	Nona Leonie<br>
								•	Warna Sari Melayu oleh Kat S.J<br>
								•	Cerita Si Conat oleh F.D.J. Pangemanan<br>
								•	Cerita Rossina<br>
								•	Nyai Isah oleh F. Wiggers<br>
								dan masih ada sekitar 3000 judul karya sastra Melayu-Lama lainnya<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							3. Angkatan Balai Pustaka</p><br>
							<img src="s3.jpg" style="float: right; margin: 0 30px 0 15px; width: 230px; height: 300px;">
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Angkatan Balai Pustaka merupakan karya sastra di Indonesia yang terbit sejak tahun 1920, yang dikeluarkan oleh penerbit Balai Pustaka. Prosa (roman, novel, cerita pendek dan drama) dan puisi mulai menggantikan kedudukan syair, pantun, gurindam dan hikayat dalam khazanah sastra di Indonesia pada masa ini. Balai Pustaka didirikan pada masa itu untuk mencegah pengaruh buruk dari bacaan cabul dan liar yang dihasilkan oleh sastra Melayu Rendah yang banyak menyoroti kehidupan pernyaian (cabul) dan dianggap memiliki misi politis (liar). Balai Pustaka menerbitkan karya dalam tiga bahasa yaitu bahasa Melayu-Tinggi, bahasa Jawa dan bahasa Sunda dan dalam jumlah terbatas dalam bahasa Bali, bahasa Batak, dan bahasa Madura. <br><br>
								Beberapa Penulis dan Karya Sastra Angkatan Balai Pustaka<br> <br>
								Merari Siregar :<br>
								•	Azab dan Sengsara (1920)<br>
								•	Binasa kerna Gadis Priangan (1931)<br>
								•	Siti Nurbaya (1922)<br><br>
								Muhammad Yamin :<br>
								•	Tanah Air (1922)<br>
								•	Indonesia, Tumpah Darahku (1928)<br>
								•	Ken Arok dan Ken Dedes (1934)<br><br>
								Nur Sutan Iskandar :<br>
								•	Apa Dayaku karena Aku Seorang Perempuan (1923)<br>
								•	Tuba Dibalas dengan Susu (1933)<br>
								•	Katak Hendak Menjadi Lembu (1935)<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							4. Pujangga Baru</p><br>
							<img src="s5.jpg" style="float: left; margin: 0 15px 0 30px; width: 250px; height: 320px;">
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Pujangga Baru muncul sebagai reaksi atas banyaknya sensor yang dilakukan oleh Balai Pustaka terhadap karya tulis sastrawan pada masa tersebut, terutama terhadap karya sastra yang menyangkut rasa nasionalisme dan kesadaran kebangsaan. Sastra Pujangga Baru adalah sastra intelektual, nasionalistis dan elitis. 
								Pada masa itu, terbit pula majalah Pujangga Baru yang dipimpin oleh Sutan Takdir Alisjahbana, beserta Amir Hamzah dan Armijn Pane. Karya sastra di Indonesia setelah zaman Balai Pustaka (tahun 1930 - 1942), dipelopori oleh Sutan Takdir Alisyahbana. Karyanya Layar Terkembang, menjadi salah satu novel yang sering diulas oleh para kritikus sastra Indonesia. Selain Layar Terkembang, pada periode ini novel Tenggelamnya Kapal van der Wijck dan Kalau Tak Untung menjadi karya penting sebelum perang. <br><br><br>
								Masa ini ada dua kelompok sastrawan Pujangga baru yaitu: <br>
								1.	Kelompok "Seni untuk Seni" yang dimotori oleh Sanusi Pane dan Tengku Amir Hamzah<br>
								2.	Kelompok "Seni untuk Pembangunan Masyarakat" yang dimotori oleh Sutan Takdir Alisjahbana, Armijn Pane dan Rustam Effendi.<br><br>
								Beberapa Penulis dan Karya Sastra Pujangga Baru<br><br>
								Sutan Takdir Alisjahbana : <br>
									•	Dian Tak Kunjung Padam (1932)<br>
									•	Tebaran Mega - kumpulan sajak (1935)<br>
									•	Anak Perawan di Sarang Penyamun (1940)<br><br>
								Hamka : <br>
									•	Di Bawah Lindungan Ka'bah (1938)<br>
									•	Tenggelamnya Kapal Van der Wijck (1939)<br>
									•	Di dalam Lembah Kehidoepan (1940)<br><br>
								Armijn Pane : <br>
									•	Belenggu (1940)<br>
									•	Jiwa Berjiwa<br>
									•	Habis Gelap Terbitlah Terang - Terjemahan Surat R.A. Kartini (1945)<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							5. Angkatan 1945</p><br>
							<img src="s45.jpg" style="float: right; margin: 0 30px 0 15px; width: 235px; height: 300px;">
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Pengalaman hidup dan gejolak sosial-politik-budaya telah mewarnai karya sastrawan Angkatan '45. Karya sastra angkatan ini lebih realistik dibanding karya Angkatan Pujangga baru yang romantik-idealistik. Karya-karya sastra pada angkatan ini banyak bercerita tentang perjuangan merebut kemerdekaan seperti halnya puisi-puisi Chairil Anwar. Sastrawan angkatan '45 memiliki konsep seni yang diberi judul "Surat Kepercayaan Gelanggang". Konsep ini menyatakan bahwa para sastrawan angkatan '45 ingin bebas berkarya sesuai alam kemerdekaan dan hati nurani. Selain Tiga Manguak Takdir, pada periode ini cerpen Dari Ave Maria ke Jalan Lain ke Roma dan Atheis dianggap sebagai karya pembaharuan prosa Indonesia. <br><br>
								Penulis dan Karya Sastra Angkatan 1945<br><br>
								Chairil Anwar : <br>
								•	Kerikil Tajam (1949)<br>
								•	Deru Campur Debu (1949)<br><br>
								Idrus : <br>
								•	Dari Ave Maria ke Djalan Lain ke Roma (1948)<br>
								•	Aki (1949)<br>
								•	Perempuan dan Kebangsaan<br><br>
								Suman Hs. : <br>
								•	Mentjari Pentjuri Anak Perawan (1957)<br>
								•	Pertjobaan Setia (1940)<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							6. Angkatan 1950 - 1960-an</p><br>
							<img src="s4.jpg" style="float: right; margin: 0 30px 0 15px; width: 250px; height: 300px;">
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Angkatan 50-an ditandai dengan terbitnya majalah sastra Kisah asuhan H.B. Jassin. Ciri angkatan ini adalah karya sastra yang didominasi dengan cerita pendek dan kumpulan puisi. Majalah tersebut bertahan sampai tahun 1956 dan diteruskan dengan majalah sastra lainnya, Sastra. 
								Pada angkatan ini muncul gerakan komunis dikalangan sastrawan, yang bergabung dalam Lembaga Kebudajaan Rakjat (Lekra) yang berkonsep sastra realisme-sosialis. Timbullah perpecahan dan polemik yang berkepanjangan di antara kalangan sastrawan di Indonesia pada awal tahun 1960; menyebabkan mandegnya perkembangan sastra karena masuk kedalam politik praktis dan berakhir pada tahun 1965 dengan pecahnya G30S di Indonesia. <br><br>
								Penulis dan Karya Sastra Angkatan 1950 - 1960-an<br><br>
								Pramoedya Ananta Toer :<br>
								•	Kranji dan Bekasi Jatuh (1947)<br>
								•	Bukan Pasar Malam (1951)<br>
								•	Mereka yang Dilumpuhkan (1951)<br>
								•	Perburuan (1950)<br><br>
								W.S. Rendra : <br>
								•   Balada Orang-orang Tercinta (1957)<br>
								•   Empat Kumpulan Sajak (1961)<br>
								•   Ia Sudah Bertualang (1963)<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							7. Angkatan 1966 - 1970-an</p><br>
							<img src="s6.jpg" style="float: left; margin: 0 15px 0 30px; width: 240px; height: 330px;">
							<p style="text-align: justify; margin: 0 30px; font-size: 19px;">
								Angkatan ini ditandai dengan terbitnya Horison (majalah sastra) pimpinan Mochtar Lubis. Semangat avant-garde sangat menonjol pada angkatan ini. Banyak karya sastra pada angkatan ini yang sangat beragam dalam aliran sastra dengan munculnya karya sastra beraliran surealistik, arus kesadaran, arketip, dan absurd. Penerbit Pustaka Jaya sangat banyak membantu dalam menerbitkan karya-karya sastra pada masa ini. Sastrawan pada angkatan 1950-an yang juga termasuk dalam kelompok ini adalah Motinggo Busye, Purnawan Tjondronegoro, Djamil Suherman, Bur Rasuanto, Goenawan Mohamad, Sapardi Djoko Damono dan Satyagraha Hoerip Soeprobo dan termasuk paus sastra Indonesia, H.B. Jassin. 
								Beberapa satrawan pada angkatan ini antara lain: Arief Budiman, Goenawan Mohamad, Budi Darma, Hamsad Rangkuti, Putu Wijaya, Wisran Hadi, Wing Kardjo, Taufik Ismail, dan banyak lagi yang lainnya. <br><br>
								Penulis dan Karya Sastra Angkatan 1966<br><br>
								Taufik Ismail :<br>
								• Malu (Aku) Jadi Orang Indonesia<br>
								• Sajak Ladang Jagung<br><br>
								Sapardi Djoko Damono :<br>
								• Dukamu Abadi (1969)<br>
								• Mata Pisau (1974)<br><br>
								Goenawan Mohamad :<br>
								• Parikesit (1969)<br>
								• Interlude (1971)<br>
								• Seks, Sastra, dan Kita (1980)<br><br>
								Putu Wijaya :<br>
								• Bila Malam Bertambah Malam (1971)<br>
								• Telegram (1973)<br>
								• Gres<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							8. Angkatan 1980 - 1990an</p><br>
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Karya sastra di Indonesia pada kurun waktu setelah tahun 1980, ditandai dengan banyaknya roman percintaan, dengan sastrawan wanita yang menonjol pada masa tersebut yaitu Marga T. Karya sastra Indonesia pada masa angkatan ini tersebar luas diberbagai majalah dan penerbitan umum. 
								Beberapa sastrawan yang dapat mewakili angkatan dekade 1980-an ini antara lain adalah: Remy Sylado, Yudistira Ardinugraha, Noorca Mahendra, Seno Gumira Ajidarma, Pipiet Senja, Kurniawan Junaidi, Ahmad Fahrawie, Micky Hidayat, Arifin Noor Hasby, Tarman Effendi Tarsyad, Noor Aini Cahya Khairani, dan Tajuddin Noor Ganie.<br><br>
								Karya-karya pada era 1980-an biasanya selalu mengalahkan peran antagonisnya. Namun yang tak boleh dilupakan, pada era 1980-an ini juga tumbuh sastra yang beraliran pop, yaitu lahirnya sejumlah novel populer yang dipelopori oleh Hilman Hariwijaya dengan serial Lupusnya. Justru dari kemasan yang ngepop inilah diyakini tumbuh generasi gemar baca yang kemudian tertarik membaca karya-karya yang lebih berat. Pada dekade 1980-an banyak sastrawan wanita Indonesia yang menonjol. Nama-nama terkenal muncul dari komunitas Wanita Penulis Indonesia yang dikomandani Titie Said, antara lain: La Rose, Lastri Fardhani, Diah Hadaning, Yvonne de Fretes, dan Oka Rusmini.<br><br>
								Penulis dan Karya Sastra Angkatan 1980 - 1990an<br><br>
								Ahmadun Yosi Herfanda : <br>
								• Sebelum Tertawa Dilarang (1997)<br>
								• Sembahyang Rumputan (1997)<br><br>
								Darman Moenir : <br>
								• Bako (1983)<br>
								• Dendang (1988)<br><br>
								Lintang Sugianto : <br>
								• Kusampaikan kumpulan puisi (2002)<br>
								• Menyapa Pagi Anak Aceh (2004)<br><br>
							</p> 

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							9. Angkatan Reformasai</p><br>
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Seiring terjadinya pergeseran kekuasaan politik dari tangan Soeharto ke BJ Habibie lalu KH Abdurahman Wahid (Gus Dur) dan Megawati Sukarnoputri, muncul wacana tentang "Sastrawan Angkatan Reformasi". Munculnya angkatan ini ditandai dengan maraknya karya-karya sastra, puisi, cerpen, maupun novel, yang bertema sosial-politik, khususnya seputar reformasi. Di rubrik sastra harian Republika misalnya, selama berbulan-bulan dibuka rubrik sajak-sajak peduli bangsa atau sajak-sajak reformasi. Berbagai pentas pembacaan sajak dan penerbitan buku antologi puisi juga didominasi sajak-sajak bertema sosial-politik. <br><br>
								Sastrawan Angkatan Reformasi merefleksikan keadaan sosial dan politik yang terjadi pada akhir tahun 1990-an, seiring dengan jatuhnya Orde Baru. Proses reformasi politik yang dimulai pada tahun 1998 banyak melatarbelakangi kelahiran karya-karya sastra—puisi, cerpen, dan novel—pada saat itu. Bahkan, penyair-penyair yang semula jauh dari tema-tema sosial politik, seperti Sutardji Calzoum Bachri, Ahmadun Yosi Herfanda, Acep Zamzam Noer, dan Hartono Benny Hidayat dengan media online: duniasastra.com -nya, juga ikut meramaikan suasana dengan sajak-sajak sosial-politik mereka.<br><br>
								Penulis dan Karya Sastra Angkatan Reformasi :<br>
								•	Widji Thukul<br>
								•	Puisi Pelo<br>
								•	Darman<br><br>
							</p>

							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px; font-weight: bold;">
							10. Angkatan 2000-an</p><br>
							<img src="ss.jpg" style="float: right; margin: 0 30px 0 15px; width: 240px; height: 310px;">
							<p style="text-align: justify; margin: 0 25px 0 35px; font-size: 19px;">
								Setelah wacana tentang lahirnya sastrawan Angkatan Reformasi muncul, namun tidak berhasil dikukuhkan karena tidak memiliki juru bicara, Korrie Layun Rampan pada tahun 2002 melempar wacana tentang lahirnya "Sastrawan Angkatan 2000", ditandai dengan terbitnya buku Leksikon Susastra Indonesia terbitan Balai Pustaka tahun 2000. Seratus lebih penyair, cerpenis, novelis, eseis, dan kritikus sastra dimasukkan Korrie ke dalam Angkatan 2000, termasuk mereka yang sudah mulai menulis sejak 1980-an, seperti Afrizal Malna, Ahmadun Yosi Herfanda dan Seno Gumira Ajidarma, serta yang muncul pada akhir 1990-an, seperti Ayu Utami, Cucuk Espe dan Dorothea Rosa Herliany. <br><br>
								Beberapa Penulis dan Karya Sastra Angkatan 2000<br><br>
								Ayu Utami :<br>
								• Saman (1998)<br>
								• Larung (2001)<br><br>
								Andrea Hirata :<br>
								• Laskar Pelangi (2005)<br>
								• Sang Pemimpi (2006)<br><br>
								Dewi Lestari :<br>
								• Supernova 1: Ksatria, Puteri dan Bintang Jatuh (2001)<br>
								• Supernova 2: Akar (2002)<br>
								• Supernova 3: Petir (2004)<br>
								• Supernova 4: Partikel (2012)<br>
								• Supernova 5: Gelombang (2014)<br>
								• Supernova 6: Inteligensi Embun Pagi (2016)<br>
								• Aroma Karsa (2018)<br><br>
								Seno Gumira Ajidarma :<br>
								• Atas Nama Malam<br>
								• Sepotong Senja untuk Pacarku<br>
								• Biola Tak Berdawai<br><br><br>
							</p>

							<p style="text-align: right; margin: 0 25px 0 35px; font-size: 15px; font-style: italic;">
								sumber: https://id.wikipedia.org/wiki/Sastra_Indonesia<br><br>
							</p>
						</p>
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
						<source src="Amigdala - Ada yang Lebih Tabah dari Hujan Bulan Juni.mp4" autoplay="true" type="video/mp4">
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