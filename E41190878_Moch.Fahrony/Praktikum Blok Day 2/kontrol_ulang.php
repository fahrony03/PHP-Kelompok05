<?php
$nilai=80;
echo "CONTOH IF ELSE <br>";
if($nilai>80) {echo "Selamat anda mendapat grade A <br>";}
elseif($nilai >= 65 && $nilai <= 80) {echo "Selamat anda mendapatkan grade B <br>";}
    else {echo "Maaf Anda belum dapat grade A <br>";};
    echo "CONTOH SWITCH <br>";
    switch ($nilai) {
        case 100 :echo "Nilai yang dipilih 100 <br>";
            break;
        
        case 90 :echo "Nilai yang dipilih 90 <br>";
            break;
            default : echo "Nilai anda belum memenuhi <br>";
    } echo "CONTOH FOR <br>";
    for($i=5;$i>=1;$i--){
        echo "Looping FOR ke : ".$i."<br>";
    }
    echo "Contoh While <br>";
    $j= 5;
    while ($j>=1) {
        echo "Looping While ke : ".$j." <br>";
        $j--;
    }
    ?>