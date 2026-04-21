<?php
//Materi variabel dan tipe data 
$nama ="Budi";
$umur =20;
$tinggi =175.9;
$hobi = [" membaca","berenang"];
echo"nama saya $nama, umur saya $umur, tinggi saya $tinggi, hobi saya $hobi[1]";


echo"<br><br> ==========================================================<br><br>";

 //operator dan kondisi if (else)

$nilai1 = 10;
$nilai2 = 20;
$hasil =$nilai1 + $nilai2;

echo "hasil dari $nilai1 + $nilai2 = $hasil ";

echo"<br><br> ==========================================================<br><br>";


$nilai1 = 55;
$nilai2 = 15;
$hasil =$nilai1 - $nilai2;

echo "hasil dari $nilai1 - $nilai2 = $hasil "; 

echo"<br><br> ==========================================================<br><br>";

$nilai1 = 250;
$nilai2 = 15;
$hasil =$nilai1 /  $nilai2;

echo "hasil dari $nilai1 / $nilai2 = $hasil "; 

echo"<br><br> ==========================================================<br><br>";

$nilai1 = 50;
$nilai2 = 15;
$hasil =$nilai1 * $nilai2;

echo "hasil dari $nilai1 *  $nilai2 = $hasil "; 

echo"<br><br> ==========================================================<br><br>";

//Perkondisian
$nilai = 90;

if($nilai >= 90){
echo"nilai anda A";
}else if (nilai >= 80 ){
    echo"nilai aanda B";
}else if (nilai >= 70 ){
    echo"nilai aanda C";
}

echo"<br><br> ==========================================================<br><br>";
$angka = 7;
if ($angka %2 == 0){
    echo"genap";
} else 
    echo "ganjil"

?>