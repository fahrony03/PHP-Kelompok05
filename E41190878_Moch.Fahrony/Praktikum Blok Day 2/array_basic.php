<?php

$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo $punakawan[0];
echo "<br>";
echo $punakawan[3];
echo "<br>";

$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[0];
echo "<br>";
echo "<br>";

echo "Hasil Dari Perulangan WHILE :<br>";
$j = 1;
while ($j < count($punakawan)) {
    echo $punakawan[$j], "<br>";
    $j++;
}

foreach ($punakawan as $o){
    echo $o;
}
?>
