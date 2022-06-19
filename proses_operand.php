<?php
 $angka1 = $_POST['operand_kiri'];
 $tanda = $_POST['operator'];
 $angka2 = $_POST['operand_kanan'];

 if($tanda == "+"){
    $x = $angka1 + $angka2;
    echo "Hasil $angka1 + $angka2 = <strong>$x</strong>";
 }elseif($tanda == "-"){
    $x = $angka1 - $angka2;
    echo "Hasil $angka1 - $angka2 = <strong>$x</strong>";
 }elseif($tanda == "*"){
    $x = $angka1 * $angka2;
    echo "Hasil $angka1 X $angka2 = <strong>$x</strong>";
 }elseif($tanda == "/"){
    $x = $angka1 / $angka2;
    echo "Hasil $angka1 / $angka2 = <strong>$x</strong>";
 }else{
    $x = $angka1 % $angka2;
    echo "Hasil $angka1 MODULUS $angka2 = <strong>$x</strong>";
 };