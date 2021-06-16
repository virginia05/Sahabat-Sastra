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

$id = $_GET["idkarya"];
$query = "UPDATE tb_karya SET valid = 1  WHERE id_karya = $id";
	// var_dump($query); die;
mysqli_query($db, $query);

echo "
			<script>
				document.location.href = 'admin.php';
			</script>
		";
