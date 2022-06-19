<?php
// $nama = ["Andri","Joko","Sukma","Rina","Sari"];
// for ($i = 0; $i < $nama; $i++){
//     echo "$nama[$i] <br/>";
// }

$menu = ["Mie Goreng","Mie Tarempa","Mie Ayam","Bak mie","Bakso","Kwitiaw","Mie So Medan","Rawon Setan"];
foreach ($menu as $val) {
    echo "$val <br/>";
}
echo "<br/>";
$nama = array(
    1 => "Andri",
    2 => "Budi",
    3 => "Sukma",
    45 => "Rina",
    55 => "Sari",
    60 => "Agus"

);
foreach($nama as $kunci => $isi){
    echo "Urutan ke-$kunci adalah $isi <br/>";
}