<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil($ayam)
{
    echo "SELAMAT ANDA BERHASIL ".$ayam;
}
function gagal()
{
    echo "MAAF ANDA GAGAL";
}
$nilai = 90;
if ($nilai>=75)
{berhasil($nilai);}
else{gagal();};
echo "<br>";
echo "fungsi dengan parameter <br>";
function jumlah($a,$b)
{return $a+$b;}
$nilai1=10;
$nilai2=15;
echo jumlah($nilai1, $nilai2);
echo "<br>";
echo "fungsi bawaan <br>";
$sekarang=getdate();
print_r($sekarang);
echo "<br>";
echo "Sekarang Tanggal :".$sekarang["mday"];
echo "<br>";
echo "Sekarang Bulan :".$sekarang["month"];
echo "<br>";
echo "Sekarang Tahun :".$sekarang["year"];
?>