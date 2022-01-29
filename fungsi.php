<?php

$conn = mysqli_connect  ("localhost", "root","", "dompetyatim");


function donasi($data) {
	global $conn;

	$jenis_donasi 	= $data["kategori"];
	$nama 			= htmlspecialchars($data["nama"]);
	$hp 			= htmlspecialchars($data["hp"]);
	$donasi 		= htmlspecialchars($data["donasi"]);
	$norek 		    = htmlspecialchars($data["norek"]);
	$atas_nama		= htmlspecialchars($data["nama-rek"]);
	$jam 			= date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$dibuat 		= date('Y-m-d H:i:s');
	

	$hasil2 = mysqli_query($conn, "INSERT INTO donasi VALUES('', '$jenis_donasi', '$nama', '$hp', '$donasi', '$norek', '$atas_nama', '$dibuat', '', '', '', 'cek')");

    
    // die(var_dump($hasil2));	
	$id_terakhir = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

	foreach ($id_terakhir as $kd); 

	
	// die(var_dump($uangs));
	$kd_unik = $kd['id'];
	if ($kd_unik >= 999) {	
		$cek_kode = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

		foreach ($cek_kode as $new_kode);
		$id = $new_kode['id'];
		$kd_unik = substr($id,-3);
	}

	$harga = $donasi;
	$harga = substr($harga,3);
	$harga = str_replace(".","",$harga);
	$harga = (int) $harga;

	$Tdonasi = $harga;

	$Tdonasi = substr($harga,0, -3);
	$kd_unik1 = sprintf('%03d',$kd_unik);

	$donasi_total = $Tdonasi.$kd_unik1;

    $jam1 = date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$ind = date('Y-m-d H:i:s');

	$jam = date('Y-m-d H:i:s',strtotime('+12 hour',strtotime($ind)));

	// die(var_dump($donasi_total));
	$update = mysqli_query($conn, "UPDATE `donasi` SET 
            `berakhir`      ='$jam',
            `kode`          ='$kd_unik',
            `total`         ='$donasi_total' 
            WHERE id = $kd[id] "); 

    // die(var_dump($update));
    
	return mysqli_affected_rows($conn);

}

function donasi2($data) {
	global $conn;

	$jenis_donasi 	= $data["kategori"];
	$nama 			= htmlspecialchars($data["nama"]);
	$hp 			= htmlspecialchars($data["hp"]);
	$donasi 		= htmlspecialchars($data["donasi"]);
	$norek 		    = htmlspecialchars($data["norek2"]);
	$atas_nama		= htmlspecialchars($data["nama-rek2"]);
	$jam 			= date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$dibuat 		= date('Y-m-d H:i:s');
	

	$hasil2 = mysqli_query($conn, "INSERT INTO donasi VALUES('', '$jenis_donasi', '$nama', '$hp', '$donasi', '$norek', '$atas_nama', '$dibuat', '', '', '', 'cek')");

    
    // die(var_dump($hasil2));	
	$id_terakhir = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

	foreach ($id_terakhir as $kd); 

	
	// die(var_dump($uangs));
	$kd_unik = $kd['id'];
	if ($kd_unik >= 999) {	
		$cek_kode = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

		foreach ($cek_kode as $new_kode);
		$id = $new_kode['id'];
		$kd_unik = substr($id,-3);
	}

	$harga = $donasi;
	$harga = substr($harga,3);
	$harga = str_replace(".","",$harga);
	$harga = (int) $harga;

	$Tdonasi = $harga;

	$Tdonasi = substr($harga,0, -3);
	$kd_unik1 = sprintf('%03d',$kd_unik);

	$donasi_total = $Tdonasi.$kd_unik1;

    $jam1 = date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$ind = date('Y-m-d H:i:s');

	$jam = date('Y-m-d H:i:s',strtotime('+12 hour',strtotime($ind)));

	// die(var_dump($donasi_total));
	$update = mysqli_query($conn, "UPDATE `donasi` SET 
            `berakhir`      ='$jam',
            `kode`          ='$kd_unik',
            `total`         ='$donasi_total' 
            WHERE id = $kd[id] "); 

    // die(var_dump($update));
    
	return mysqli_affected_rows($conn);

}

?>