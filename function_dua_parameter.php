<?php
function tambah($satu,$dua){
    $hasil = $satu + $dua;
    return $hasil;
}
$a = tambah(6,10);
echo"$a<br/>";
$b = tambah(100,99);
echo "$b <br/>";
$c = tambah($a,99);
echo "$c <br/>";
$d = tambah(100,$b);
echo "$d <br/>";

function tambah_kurang($satu,$dua){
    $hasil[] = $satu + $dua;
    $hasil[] = $satu - $dua;
    return $hasil;
}
$e = tambah_kurang(100,30);
echo "100 tambah 30 = ".$e[0];
echo "<br/>";
echo "100 kurang 30 = ".$e[1];
