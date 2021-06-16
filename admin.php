<?php
    $db = mysqli_connect("localhost","root","","web_sastra");

    function query($query) {
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    $sql = query("SELECT * FROM tb_karya WHERE valid = 0");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang di SahabatSastra</title>
</head>
<style type="text/css">
.nav_links a{
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    padding: 20px;
    float: right;
    margin-right: 50px; 
    color:black;
}

.nav_links{

    list-style: none;
    background: none;
}

.nav_links a:hover {
    background-color: white;
}

.music_playlist{
        margin: 24px 50px 5px 25px;
        float: right;

    }

</style>

<body style="font-family: calibri; background-image: url('ppo.jpg'); margin:0; width: 100%;">
            <ul class="nav_links" style="float: left; margin-left: 50px; ">
                <a href="logout.php" id="about">Logout</a>     
            </ul>
        <div id="kanan">
            <div class="music_playlist">
                <select style="height: 35px; width: 77%;" name="pilih">
                    <option value="Banda-Neira-Rindu-Lirik_HGnN_0hOfuM.mp3">Banda Neira - Rindu</option>
                    <option value="Banda-Neira-Hujan-di-Mimpi-lyrics-video_NayaLarRS7w.mp3">Banda Neira - Hujan di Mimpi</option>
                    <option value="Banda Neira - Sampai Jadi Debu ( Indie ).mp3">Banda Neira - Sampai Jadi Debu</option>
                    <option value="Banda Neira -  Yang Patah Tumbuh, yang Hilang Berganti.mp3">Banda Neira -  Yang Patah Tumbuh, yang Hilang Berganti
                    </option>
                </select><br>
                <audio controls autoplay="">
                   <source src="" type="audio/mpeg">
               </audio>
            </div>
        </div>
    
    <marquee style="font-size: 35px; font-weight: bold; color:white;">
    Selamat datang, Admin . . .
    </marquee> <br><br><br>

    <table style="background-color: whitesmoke; margin: auto;" border="solid" cellpadding="10" cellspacing="0">
    	<tr>
    		<th>Id Karya</th>
    		<th>Aksi</th>
    		<th>Id Admin</th>
    		<th>Id Jenis</th>
            <th>Penulis</th>
            <th>Email</th>
            <th>Judul</th>
            <th>Isi</th>
    	</tr>

    	<?php $i = 1; ?>
    	<?php foreach( $sql as $row ) : ?>
    	<tr>
    		<td><?= $row["id_karya"]; ?></td>
    		<td>
                <a href="approve.php?idkarya=<?= $row['id_karya']; ?>">Approve</a>
    		</td>
    		<td><?= $row["id_admin"]; ?></td>
            <td><?= $row["id_jenis"]; ?></td>
            <td><?= $row["author"]; ?></td>
    		<td><?= $row["email"]; ?></td>
            <td><?= $row["judul"]; ?></td>
            <td><textarea name="" id="" cols="40" rows="10" style="background-color: whitesmoke;" readonly><?php echo $row["isi"]; ?></textarea>
            </td>
    	</tr>
    	<?php endforeach; ?>   
    </table>
    <br><br><br>
<footer 
style="
    background-color:  #515150 ;
    padding: 15px;
    text-align: center;
    clear: both;
    color: white;"> &copy; Copyrighted virginia_novera</footer>
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