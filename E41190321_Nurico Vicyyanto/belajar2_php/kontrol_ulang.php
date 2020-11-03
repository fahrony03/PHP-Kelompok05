<?php
$nilai=80;
echo "CONTOH IF ELSE <br>";
if ($nilai>80) {echo "Selamat Anda Mendapatkan Grade A <br>";}
elseif ($nilai>70 && $nilai<=80) {echo "Selamat Anda Mendapatkan Nilai $nilai <br>";}
else { echo "Maaf Anda Belum Mendapatkan Grade A <br>";};
echo "Contoh Switch <br>";
switch($nilai) {
    case 100 : echo "Nilai Yang Dipilih 100 <br>";
    break;
    case 90 : echo "Nilai Yang Dipilih 90 <br>";
    break;
    default : echo "Nilai Yang Dipilih $nilai <br>";
}   echo "Contoh for <br>";
for($i=5;$i>=1;$i--){
    echo "looping for ke : ".$i."<br>";
}
echo "Contoh while <br>";
$j=5;
while($j>=1){
    echo "looping while ke : ".$j."<br>";
    $j--;
}
?>