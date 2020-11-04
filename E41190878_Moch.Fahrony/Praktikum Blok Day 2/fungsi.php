<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil($nilai){
    echo "SELAMAT ANDA BERHASIL DENGAN NILAI : ".$nilai."";
}
function gagal($nilai){
    echo "MAAF ANDA GAGAL : ".$nilai."";
}
$nilai = 80;
if ($nilai >= 75) {
    berhasil($nilai);
}
else {
    gagal($nilai);
};
echo "<br>";
echo "FUNGSI DENGAN PARAMETER <br>";
function jumlah($a,$b){
    return $a + $b;
}
$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1,$nilai2);
echo "<br>";
echo "FUNGSI BAWAAN <br>";
$sekarang = getdate();
print_r($sekarang);
echo "<br>";
echo "Sekarang Tanggal : ".$sekarang["mday"], "<br>";
echo "Sekarang Bulan : ".$sekarang["month"], "<br>";
echo "Sekarang Tahun : ".$sekarang["year"], "<br>";

echo "Sekarang Tanggal " . date("Y/m/d") . "<br>";
echo "Today is " . date("l");

?>